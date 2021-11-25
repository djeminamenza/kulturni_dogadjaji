<?php

namespace App\Http\Controllers;

use App\Models\Tiding;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
// use App\Http\Controllers\Auth;

class TidingController extends Controller
{

    public function showTidings()
    {
        $tidings = Tiding::all();
        return view('vesti', compact('tidings'));
    }

    public function addnewTiding(){
        return view('/user/addTiding');
    }

    public function store(Request $request){

        Tiding::create([
        'name' => $request -> name,
        'description' => $request -> description,
        'id_category'=> $request -> id_category,
      //  'user_id' => Auth::user()->id,
        ]);

        return redirect()->to('vesti')->with('message', 'Vest je uspesno dodata!');
    }

}
