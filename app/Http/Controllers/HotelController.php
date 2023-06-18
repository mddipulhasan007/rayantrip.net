<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\FormData; // Assuming you have a model named FormData

class HotelController extends Controller
{

    public function hotel()
    {
        return view('frontend/hotel');
    }

    public function hotelsearch()
    {
        return view('frontend/hotel-search');
    }
    public function postStephotel1(Request $request)
    {
        $data = $request->validate([
            'hotel_name' => 'required',
            'country_name' => 'required',
            'checkin_date_from' => 'required',
            'checkout_date_from' => 'required',
            'guest_count' => 'required',
            'room_count' => 'required',
        ]);

        $request->session()->put('hotel', $data);

        return redirect()->route('stephotel2');
    }

    public function stephotel2(Request $request)
    {
        $stephotel1Data = $request->session()->get('hotel');

        return view('frontend/hotel-search', compact('stephotel1Data'));
    }

    public function postStephotel2(Request $request)
    {
        $data = $request->validate([
            'package' => 'required',
        ]);

        $request->session()->put('stephotel2', $data);

        return redirect()->route('stephotel3');
    }

    public function stephotel3(Request $request)
    {
        $stephotel1Data = $request->session()->get('hotel');
        $stephotel2Data = $request->session()->get('stephotel2');

        return view('frontend/flights-payment-hotel', compact('stephotel1Data', 'stephotel2Data'));
    }

    public function postStephotel3(Request $request)
    {
        $data = $request->validate([
            'total_price' => 'required',
        ]);

        // Save the form data to the database
        // FormData::create(array_merge(
        //     $request->session()->get('hotel'),
        //     $request->session()->get('stephotel2'),
        //     $data
        // ));

        // Clear session data
        $request->session()->forget('hotel');
        $request->session()->forget('stephotel2');

        return redirect()->route('hotelsuccess');
    }

    public function hotelsuccess(){
        return view('frontend/hotel-success');
    }
}