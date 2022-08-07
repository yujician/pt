<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OptionData extends Model
{
    use HasFactory;

    protected $fillable = [

        'd_title',
        'base_constant',
        'a4_constant',
        'a5_constant',
        'b5_constant',
        'b6_constant',
        'page_flag',
        'rate_flag',
        'notes',
        'v_order',
        'u_status'
    ];
}
