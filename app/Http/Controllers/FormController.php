<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\FormData; // Assuming you have a model named FormData

class FormController extends Controller
{
    // public function step1()
    // {
    //     return view('frontend/step1');
    // }

    // public function flightsearch()
    // {
    //     return view('frontend/flights-search');
    // }

    public function hotel()
    {
        return view('frontend/hotel');
    }

    public function visa()
    {
        return view('frontend/visa');
    }

    public function chartered()
    {
        return view('frontend/chartered');
    }

    public function activities()
    {
        return view('frontend/activities');
    }

    public function index()
    {
        return view('frontend/index');
    }

    public function postStep1(Request $request)
    {
        $data = $request->validate([
            'from_city' => 'required',
            'from_city_short_apt_name' => 'required',
            'to_city' => 'required',
            'to_city_short_apt_name' => 'required',
            'dept_date_from' => 'required',
            'trav_count' => 'required',
            'fare_type' => 'required',
        ]);

        $request->session()->put('index', $data);

        return redirect()->route('step2');
    }

    public function step2(Request $request)
    {
        $step1Data = $request->session()->get('index');

        return view('frontend/flights-search', compact('step1Data'));
    }

    public function postStep2(Request $request)
    {
        $data = $request->validate([
            'package' => 'required',
        ]);

        $request->session()->put('step2', $data);

        return redirect()->route('step3');
    }

    public function step3(Request $request)
    {
        $step1Data = $request->session()->get('index');
        $step2Data = $request->session()->get('step2');

        return view('frontend/flights-payment', compact('step1Data', 'step2Data'));
    }

    public function postStep3(Request $request)
    {
        $data = $request->validate([
            'total_price' => 'required',
        ]);

        // Save the form data to the database
        FormData::create(array_merge(
            $request->session()->get('index'),
            $request->session()->get('step2'),
            $data
        ));

        // Clear session data
        $request->session()->forget('index');
        $request->session()->forget('step2');

        return redirect()->route('success');
    }

    public function success(){
        return view('frontend/success');
    }
}