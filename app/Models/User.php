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
        $affected = DB::table('users')
            ->where('id', $id)
            ->update(['is_admin' => 1]);
    }

    public function getUserWithRoles()
    {
        DB::table('users')
            ->join('contacts', 'users.id', '=', 'contacts.user_id')
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('users.id', 'contacts.phone', 'orders.price')
            ->get();
    }

    public function isAdmin($id)
    {
        $data = User::join('groups_users', 'groups_users.user_id', '=', $id)
                    ->join('groups','groups.id', 'groups_users.groups_id')
                    ->get(['groups.role']);
        return (compact('data'));

        //->select('groups_users.groups_id')
        //->select('groups.role')
        //->where('user_id','=',$id)
        //->where('groups.id','=','groups_users.groups_id')
        // ->join('groups_users',)
        // ->join('groups','groups.id', 'groups_id')
        // ->select('users.name')
        //->get();
    }
//}

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
