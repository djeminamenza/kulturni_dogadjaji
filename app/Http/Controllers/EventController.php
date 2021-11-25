<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{

    public function showEvents()
    {
        $events = DB::table('events')
        ->join('categories', 'events.id_category', '=', 'categories.id')
        ->join('ages', 'events.id_years', '=', 'ages.id')
        ->join('places', 'events.id_place', '=', 'places.id')
        ->join('cities', 'events.id_city', '=', 'cities.id')
        ->select('events.id', 'events.name', 'events.starting_date', 'events.ending_date', 'ages.ages', 
        'categories.description as categ', 'cities.name', 'places.description')
        ->get();
        return view('dogadjaji', compact('events'));
    }


}

           


            