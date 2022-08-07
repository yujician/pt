<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderData extends Model
{
    use HasFactory;

    protected $fillable = [
        'cover_name',
        'cover_file',
        'cover_file_path',
        'content_name',
        'content_file',
        'content_file_path',
        'paper_size',
        'copies',
        'binding',
        'pages',
        'paper_type1',
        'paper_weight1',
        'cover_color',
        'paper_type2',
        'paper_weight2',
        'contents_color',
        'proccess',
        'is_kadomaru',
        'is_holds',
        'number_holds',
        'proofreading',
        'cover_or_content',
        'part_or_whole',
        'number_parts',
        'printing_fee',
        'process_fee',
        'proofreading_fee',
        'product_price',
        'postage_fee',
        'unit_price',
        'subtotal',
        'consumption_tax',
        'total_fee',
        'o_remarks',
        'customer_code',
        'o_company',
        'o_name',
        'o_mail',
        'o_tel',
        'o_fax',
        'o_yubin',
        'o_addr1',
        'o_addr2',
        'o_addr3',
        'write_userinfo',
    ];
}
