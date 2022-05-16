<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class guru extends Controller
{
    //
    public function streaming_view()
    {

        return View(' streaming.streaming');
    }
}