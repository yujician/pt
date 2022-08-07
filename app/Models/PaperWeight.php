<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaperWeight extends Model
{
    use HasFactory;

    protected $fillable = [

        'paper_id',
        'size_flag',
        'kg_no',
        'v_order',
        'u_status'
    ];
}
