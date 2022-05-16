<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class login extends Controller
{
    //
    public function index()
    {
        return view('login.login');
    }
    public function cek(Request $request)
    {


        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            if (auth()->user()->role === 'kajur') {
                alert()->success('Behasil Login', 'Behasil Login');

                return redirect('/streaming_kajur');
                // } elseif (auth()->user()->role === 'guru') {
                //     alert()->success('SuccessAlert', 'Behasil Login');

                //     return redirect()->route('guru');
            }

            //  } else {
            //     alert()->error('Data Anda Salah.', 'Data Anda Salah.');
            //     return view('login.login');
            // }
        } else {
            alert()->error('Data Anda Salah.', 'Data Anda Salah.');
            return redirect('/login');
        }
    }

    public function logout(Request $request)
    {
        Session::flush();

        Auth::logout();

        alert()->success('Behasil Logout', 'Behasil Logout');
        return redirect('/login');
    }
}