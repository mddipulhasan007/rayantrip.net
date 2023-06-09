<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

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

    public function signin()
    {
        return view('frontend/sign-in');
    }

    public function signup()
    {
        return view('frontend/sign-up');
    }

    public function tours()
    {
        return view('frontend/tours');
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

        //return view('frontend/index');
        if(Auth::check())
        {
            $user_id = Auth::user()->id;
            $user_name = Auth::user()->name;
            $user_email = Auth::user()->email;
            $user_password = Auth::user()->password;
            return view('frontend/index', compact('user_id', 'user_name', 'user_email', 'user_password'));
        }
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
            'return_date_to' => '',
            'trav_count' => 'required',
            'fare_type' => 'required',
        ]);

        $request->session()->put('index', $data);

        return redirect()->route('step2');
    }

    public function step2(Request $request)
    {
        $step1Data = $request->session()->get('index');

        //return view('frontend/flights-search');

        if(Auth::check())
        {
            $user_id = Auth::user()->id;
            $user_name = Auth::user()->name;
            $user_email = Auth::user()->email;
            $user_password = Auth::user()->password;
            return view('frontend/flights-search', compact('step1Data', 'user_id', 'user_name', 'user_email', 'user_password'));
        }
        return view('frontend/flights-search', compact('step1Data'));

        //return view('frontend/flights-search', compact('step1Data'));
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

        if(Auth::check())
        {
            $user_name = Auth::user()->name;
            return view('frontend/flights-payment', compact('step1Data', 'step2Data', 'user_name'));
        }
        return redirect('login')->with('success', 'you are not allowed to access');

        //return view('frontend/flights-payment', compact('step1Data', 'step2Data'));
    }

    public function postStep3(Request $request)
    {
        $data = $request->validate([
            'total_price' => 'required',
        ]);

        $data['user_id'] = auth()->id();

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

    function mybooking()
    {

        if(Auth::check())
        {
           
            //return view('my-booking', compact('user_name'));

           $user = User::with('bookings')->where('id',auth()->id())->first();
            return view('my-booking', [
                'user' => $user,
                'user_name' => Auth::user()->name,

          ]);
        }
        
    }

    public function success(){
        //return view('frontend/success');
        if(Auth::check())
        {
            $user_name = Auth::user()->name;
            return view('frontend/success', compact('user_name'));
        }
        return redirect('login')->with('success', 'you are not allowed to access');
    }
}