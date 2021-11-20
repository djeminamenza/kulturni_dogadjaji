<?php

namespace App\Http\Controllers;

use App\Models\Tiding;
use Illuminate\Support\Facades\DB;

class TidingController extends Controller
{

    public function showTidings()
    {
        $tidings = Tiding::all();
        return view('vesti', compact('tidings'));
    }


}
