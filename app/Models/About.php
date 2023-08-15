<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $table = 'about';
    protected $fillable = [
        'image' , 'description', 'slogan1',
        'slogan2' , 'slogan3' , 'slogan4'
    ];
}
