<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mqttRequest extends Model
{
    use HasFactory;
    protected $fillable = [
     'id_user', 'id','command'
    ];
}
