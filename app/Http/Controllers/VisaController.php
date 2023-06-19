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

class VisaController extends Controller
{

    public function visa()
    {
        //return view('frontend/visa');
        if(Auth::check())
        {
            $user_id = Auth::user()->id;
            $user_name = Auth::user()->name;
            $user_email = Auth::user()->email;
            $user_password = Auth::user()->password;
            return view('frontend/visa', compact('user_id', 'user_name', 'user_email', 'user_password'));
        }
        return view('frontend/visa');
        //return redirect('login')->with('success', 'you are not allowed to access');
    }

    public function visasearch()
    {
        return view('frontend/visa-search');
    }
    public function postStepvisa1(Request $request)
    {
        $data = $request->validate([
            'country' => 'required',
            'entry_date_from' => 'required',
            'exit_date_to' => 'required',
            'nationality' => 'required',
            'visa_trav_count' => 'required',
        ]);

        $request->session()->put('visa', $data);

        return redirect()->route('stepvisa2');
    }

    public function stepvisa2(Request $request)
    {
        $stepvisa1Data = $request->session()->get('visa');

        if(Auth::check())
        {
            $user_id = Auth::user()->id;
            $user_name = Auth::user()->name;
            $user_email = Auth::user()->email;
            $user_password = Auth::user()->password;
            return view('frontend/visa-search', compact('stepvisa1Data', 'user_id', 'user_name', 'user_email', 'user_password'));
        }
        //return redirect('login')->with('success', 'you are not allowed to access');

        return view('frontend/visa-search', compact('stepvisa1Data'));
    }

    public function postStepvisa2(Request $request)
    {
        $data = $request->validate([
            'package' => 'required',
        ]);

        $request->session()->put('stepvisa2', $data);

        return redirect()->route('stepvisa3');
    }

    public function stepvisa3(Request $request)
    {
        $stepvisa1Data = $request->session()->get('visa');
        $stepvisa2Data = $request->session()->get('stepvisa2');

        if(Auth::check())
        {
            $user_id = Auth::user()->id;
            $user_name = Auth::user()->name;
            $user_email = Auth::user()->email;
            $user_password = Auth::user()->password;
            return view('frontend/flights-payment-visa', compact('stepvisa1Data', 'stepvisa2Data', 'user_id', 'user_name', 'user_email', 'user_password'));
        }
        return redirect('login')->with('success', 'you are not allowed to access');

        //return view('frontend/flights-payment-visa', compact('stepvisa1Data', 'stepvisa2Data'));
    }

    public function postStepvisa3(Request $request)
    {
        $data = $request->validate([
            'total_price' => 'required',
        ]);

        // Save the form data to the database
        // FormData::create(array_merge(
        //     $request->session()->get('visa'),
        //     $request->session()->get('stepvisa2'),
        //     $data
        // ));

        // Clear session data
        $request->session()->forget('visa');
        $request->session()->forget('stepvisa2');

        return redirect()->route('visasuccess');
    }

    public function visasuccess(){
        //return view('frontend/visa-success');
        if(Auth::check())
        {
            $user_id = Auth::user()->id;
            $user_name = Auth::user()->name;
            $user_email = Auth::user()->email;
            $user_password = Auth::user()->password;
            return view('frontend/visa-success', compact('user_id', 'user_name', 'user_email', 'user_password'));
        }
        return redirect('login')->with('success', 'you are not allowed to access');
    }
}