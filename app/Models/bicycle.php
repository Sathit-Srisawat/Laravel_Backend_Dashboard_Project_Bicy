<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bicycle extends Model
{
    use HasFactory;
    
    protected $fillable = [
     'latitude','longitude','zone_id', 'id', 'type','status','station','detail','advised','bath','url','channel'
    ];
}
