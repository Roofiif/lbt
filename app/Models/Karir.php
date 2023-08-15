<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karir extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pekerjaan' , 'job_requirment', 'deskripsi_pekerjaan' ,'salary','benefit', 'linkgf','fulltime_magang', 'slug',
    ];
}
