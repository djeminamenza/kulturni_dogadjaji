<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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
        'user_id',
    ];

/*     public function addNewTiding()
    {
        $affected = DB::table('tidings')
            ->insert(['name' => 'nova_vest.name',
                    'description' => 'description',
                    'id_category' => 3,
                    'user_id' => 2,

        ]);
    } */
}
