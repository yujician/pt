<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrintingData extends Model
{
    use HasFactory;

    protected $fillable = [

        'd_title',
        'cover_color_constant',
        'contents_color_constant',
        'cover_mono_constant',
        'contents_mono_constant',
        'cover_r',
        'con_1_r',
        'con_2_r'
    ];
}
