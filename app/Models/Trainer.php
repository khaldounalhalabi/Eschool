<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable =
    [
        'name' ,
        'phone' ,
        'specialize' ,
        'image' ,
    ];
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
