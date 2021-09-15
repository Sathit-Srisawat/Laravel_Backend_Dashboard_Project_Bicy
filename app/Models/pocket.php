<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pocket extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'total', 'receive', 'transfer'];
}
