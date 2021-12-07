<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_admin',
        'groups_id',
        'user_id',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function makeAdmin($id)
    {
        $affected = DB::table('groups_users')
            ->where('user_id', $id)
            ->update(['groups_id' => 1]);
    }

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
