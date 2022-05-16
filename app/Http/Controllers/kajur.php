<?php

namespace App\Http\Controllers;

use App\Models\streaming;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class kajur extends Controller
{
    //
    public function streaming_view()
    {
        $data = streaming::all();

        return View(' streaming.kajur', compact('data'));
    }
    public function post(Request $request)
    {

        $user = new streaming;

        $user->tanggal_meting = $request->tanggal_meting;
        $user->jenis_rapat = $request->jenis_rapat;

        $user->waktu_rapat = $request->waktu_rapat;
        $user->judul_rapat = $request->judul_rapat;
        $user->link_rapat = $request->link_rapat;



        $user->save();
        alert()->success('SuccessAlert', 'Behasil Di Tambahkan');

        return redirect('/streaming_kajur');
    }
    public function delete($id)
    {

        DB::table('streamings')->where('id', $id)->delete();
        alert()->error('ErrorAlert', 'Data Berhasil Di Hapus.');
        return redirect('/streaming_kajur');
    }
}
