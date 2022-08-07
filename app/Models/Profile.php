<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'u_id',
        'company_name',
        'yubin',
        'addr1',
        'addr2',
        'addr3',
        'tel',
        'fax',
        'biko',
    ];

}

