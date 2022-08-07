<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoverData extends Model
{
    use HasFactory;

    protected $fillable = [

        'd_title',
        'd_file',
        'd_description',
        'v_order',
        'u_status'
    ];

}
