<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaperData extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'd_title',
        'unit_cost',
        'cover_flag',
        'con_flag',
        'v_order',
        'u_status'
    ];

    
}
