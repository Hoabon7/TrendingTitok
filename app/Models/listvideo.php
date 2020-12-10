<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listvideo extends Model
{
    use HasFactory;
    protected $table="listvideos";
    protected $fillable = [
        'url','thumbnail'
    ];

}
