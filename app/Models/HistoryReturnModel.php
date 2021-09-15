<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryReturnModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'id','idbike','station'
    ];



}
