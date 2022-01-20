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

    public function removeTiding_request($id){
        Tiding::where('id', $id)
        ->update(['delete_request'=>1]);

        return redirect()->to('vesti');
    }


    public function show_remove_requests()
    {
        $tidings = Tiding::where('delete_request', 1)
                ->get();


        return view('/deleting/news', compact('tidings'));
    }


    public function removeTiding($id) {
        $Tid = Tiding::find($id);

          $Tid->delete();
        return redirect()->to('/deleting/news');
      }


}
