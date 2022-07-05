<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course ;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 3; $i++) {
            for ($j=1; $j <6 ; $j++) {
                Course::create([
                    'category_id' =>$i,
                    'trainer_id' =>rand(1 ,5) ,
                    'name' => "course num $j cat num $j" ,
                    'small_description' => 'this is small description' ,
                    'description' => 'this is long discription' ,
                    'price' => rand(1000 , 5000) ,
                    'image' => "$i$j.png" ,
                ]) ;
            }
        }
    }
}
