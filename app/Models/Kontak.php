<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    use HasFactory;
    protected $table = 'kontak';
    protected $fillable = [
        'image' , 'wa', 'telephone',
        'alamat' , 'email_pt' , 'email_rec',
        'linkedin', 'maps_embed'
    ];
}
