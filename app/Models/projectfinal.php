<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projectfinal extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'firstname','lastname','phonenumber','email','idcard'
    ];
}
