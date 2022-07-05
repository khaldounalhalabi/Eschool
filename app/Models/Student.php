<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = [
        'name' ,
        'email' ,
        'specialize' ,
    ] ;

    public function courses()
    {
        return $this->belongsTo(Course::class);
    }
}
