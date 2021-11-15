<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;

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
    public function getUsers()
    {
        $users = User::all();
        return view('users', compact('users'));
    }
    public function makeMeAnAdmin($id)
    {
        $user = new User();
        $user->makeAdmin($id);
        //return view('users');
        return redirect()->to('users')->with('message', 'Korisnik sa id: ' . $id . ' uspesno prebacen u admine');
    }


    // public function registracija()
    // {
    //     return view('registracija');
    // }
}
