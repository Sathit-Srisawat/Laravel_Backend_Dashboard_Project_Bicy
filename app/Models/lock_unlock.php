<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lock_unlock extends Model
{
    use HasFactory;
    protected $fillable = [
      'station' ,'id', 'status'
    ];
}
