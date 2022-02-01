<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        return view('services');
    }

    public function networksupport()
    {
        return view('networksupport');
    }

    public function serversupport()
    {
        return view('serversupport');
    }

    public function desktopsupport()
    {
        return view('desktopsupport');
    }
}
