<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiding extends Model
{
    use HasFactory;


        /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
        'description',
        'id_category',
        'id_user',
    ];
}
