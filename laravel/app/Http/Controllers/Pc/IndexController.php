<?php

namespace App\Http\Controllers\Pc;

use App\Http\Requests;

use Illuminate\Http\Request;

class IndexController extends PcController
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pc.home');
    }
}
