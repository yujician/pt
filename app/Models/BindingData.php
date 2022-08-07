<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BindingData extends Model
{
    use HasFactory;

    protected $fillable = [

        'd_title',
        'base_constant',
        'unit_constant',
        'v_order',
        'u_status'
    ];
}
