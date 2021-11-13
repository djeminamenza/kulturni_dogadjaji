<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function oportalu()
    {
        return view('oportalu');
    }

    
    public function ankete()
    {
        return view('ankete');
    }

    
    public function pregled()
    {
        return view('pregled');

    }

    
    public function pravilnik()
    {
        return view('pravilnik');
    }

    
    public function registracija()
    {
        return view('registracija');
    }

    
    public function vesti()
    {
        return view('vesti');
    }
}
