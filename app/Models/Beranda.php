<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beranda extends Model
{
    use HasFactory;
    protected $table = 'beranda';
    protected $fillable = [
        'utama_img' , 'desc_ttg', 'sert_logo',
        'sert_link' , 'sert_desc' , 'awasi_logo'
    ];
}
