<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = "courses"  ;
    protected $primaryKey = "id" ;
    public $timestamps = true ;
    protected $fillable =
    [
        'name' ,
        'image' ,
        'price' ,
        'small_description' ,
        'description' ,
    ] ;
  public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function trainer()
    {
        return $this->belongsTo(Trainer::class);
    }
    public function students()
    {
        return $this->belongsTo( Student::class );
    }
}
