<?php

namespace Database\Seeders;

use App\Models\Testemonial;
use Illuminate\Database\Seeder;

class TestemonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1 ; $i<=10 ; $i++)
        {
            Testemonial::create([
                'name'=>"Test .$i",
                'specialize' => "SPEC $i" ,
                'description' => "DESC $i" ,
                'image' => "$i.jpg" ,
            ]) ;
        }
    }
}
