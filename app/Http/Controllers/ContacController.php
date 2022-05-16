<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Mail;
use App\Mail\email;


class ContacController extends Controller
{
    //
    public function sendContact(Request $request)

    {


        $data = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'subjek' => 'required',
            'pertanyaan' => 'required',

        ]);
        $data = [
            'nama' => $request->nama,
            'email' => $request->email,
            'subjek' => $request->subjek,
            'pertanyaan' => $request->pertanyaan

        ];


        Mail::to('muhammadrezaalfatah09@gmail.com')->send(new email($data));
        alert()->success('SuccessAlert', 'Pesan Telah Di Tambahkan.');

        return redirect('/kontak');
    }
}