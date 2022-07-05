<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $fillable = 
    [
        'name' , 
        'logo' , 
        'favicon' , 
        'city' , 
        'address' , 
        'phone' , 
        'work_hours' , 
        'email' , 
        'map' , 
        'facebool' , 
        'twitter' , 
    ] ; 
}
