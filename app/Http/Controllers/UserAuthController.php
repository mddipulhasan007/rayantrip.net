<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{
    function index()
    {
        return view('login');
    }

    function registration()
    {
        return view('registration');
    }

    function validate_registration(Request $request)
    {
        $request->validate([
            'name'         =>   'required',
            'email'        =>   'required|email|unique:users',
            'password'     =>   'required|min:6'
        ]);

        $data = $request->all();

        User::create([
            'name'  =>  $data['name'],
            'email' =>  $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        return redirect('login')->with('success', 'Registration Completed, now you can login');
    }

    function validate_login(Request $request)
    {
        $request->validate([
            'email' =>  'required',
            'password'  =>  'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials))
        {
            return redirect('/');
        }

        return redirect('login')->with('success', 'Login details are not valid');
    }

    function dashboard()
    {
        if(Auth::check())
        {
            $user_id = Auth::user()->id;
            $user_name = Auth::user()->name;
            $user_email = Auth::user()->email;
            $user_password = Auth::user()->password;
            return view('dashboard', compact('user_id', 'user_name', 'user_email', 'user_password'));
        }
        return redirect('login')->with('success', 'you are not allowed to access');
    }

    function myprofile()
    {
        if(Auth::check())
        {
            $user_id = Auth::user()->id;
            $user_name = Auth::user()->name;
            $user_email = Auth::user()->email;
            $user_password = Auth::user()->password;
            return view('frontend/profile', compact('user_id', 'user_name', 'user_email', 'user_password'));
        }
        return redirect('login')->with('success', 'you are not allowed to access');
    }

    // function mybooking()
    // {
    //     if(Auth::check())
    //     {
    //         $user_id = Auth::user()->id;
    //         $user_name = Auth::user()->name;
    //         $user_email = Auth::user()->email;
    //         $user_password = Auth::user()->password;
    //         return view('my-booking', compact('user_id', 'user_name', 'user_email', 'user_password'));
    //     }
    //     return redirect('login')->with('success', 'you are not allowed to access');
    // }

    function editprofile()
    {
        // return view('editprofile');
        $user_name = Auth::user()->name;
        $user_email = Auth::user()->email;
        $user_password = Auth::user()->password;
        return view('editprofile', compact('user_name', 'user_email', 'user_password'));
    }

    function validate_editprofile(Request $request)
    {
        $request->validate([
            'name'         =>   'required',
            'email'        =>   'required|email|unique:users',
            'password'     =>   'required|min:6'
        ]);

        $editprofile = [
            'name'          =>  $request->name,
            'email'         =>  $request->email,
            'password'    =>  $request->password,
        ];
        User::where('id',auth()->id())->update($editprofile);
        //return dd($editprofile);
        //DB::table('users')->where('id',$request->idUpdate)->update($editprofile);
        //return redirect()->back()->with('myprofile','.');
        return redirect()->route('myprofile');
    }

    function users()
    {
            // return view('dashboard');
            // $data=User::all();
            // return view('dashboard', ['users'=>$data]);
            
            $authusers = DB::select('select * from users');
            return view('users', ['users'=>$authusers]);
    }

    function logout()
    {
        Session::flush();

        Auth::logout();

        return Redirect('login');
    }
}
