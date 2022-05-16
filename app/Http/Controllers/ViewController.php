<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\streaming;

class ViewController extends Controller
{
    //
    public function portal_view()
    {
        return View('portal.portal');
    }
    public function alumni_view()
    {
        return View('alumni.alumni');
    }
    public function rpl_view()
    {
        return View('rpl.rpl');
    }
    public function mm_view()
    {
        return View('mm.mm');
    }
    public function tkj_view()
    {
        return View('tkj.tkj');
    }
    public function perhotelan_view()
    {
        return View('perhotelan.perhotelan');
    }
    public function jasaboga_view()
    {
        return View('jasa-boga.jasa-boga');
    }
    public function bdp_view()
    {
        return View('bdp.bdp');
    }
    public function akl_view()
    {
        return View('akl.akl');
    }
    public function otkp_view()
    {
        return View('otkp.otkp');
    }
    public function tenaga_kerja_view()
    {
        return View('Tenaga_Kerja.tenaga_kerja');
    }
    public function streaming_view()
    {
        if (auth()->guest()) {
            $data = streaming::all();
            return view('streaming.streaming', compact('data'));
        } elseif (auth()->user()->role === 'kajur') {


            return redirect('/streaming_kajur');
        } elseif (auth()->user()->role === 'guru') {
            alert()->success('SuccessAlert', 'Behasil Login');

            return redirect()->route('guru');
        }
    }
    public function galeri_view()
    {
        return View(' galeri.galeri');
    }
    public function kontak_view()
    {
        return View(' kontak.kontak');
    }
    public function qiraat_view()
    {
        return View(' eskul.qiraat');
    }
    public function berita_view()
    {
        return View(' judul_berita.judul_berita');
    }
}