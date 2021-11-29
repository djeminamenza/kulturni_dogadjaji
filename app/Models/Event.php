<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $table = 'events';
    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
        'starting_date',
        'ending_date',
        'id_city',
        'id_category',
        'id_years',
        'id_place',
    ];
}
