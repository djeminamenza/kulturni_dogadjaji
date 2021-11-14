<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function oportalu()
    {
        return view('oportalu');
    }

    public function dogadjaji()
    {
        return view('dogadjaji');
    }

    public function vesti()
    {
        return view('vesti');
    }

    public function ankete()
    {
        return view('ankete');
    }

    public function pravilnik()
    {
        return view('pravilnik');
    }

    // public function registracija()
    // {
    //     return view('registracija');
    // }
}
