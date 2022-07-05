<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Trainer ;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trainer::create([
            'name' => 'khaldoun alhalabi' ,
            'specialize' => 'web development' ,
            'image' => '1.jpg'
        ]) ;

        Trainer::create([
            'name' => 'khaled alhalabi',
            'specialize' => 'web development',
            'image' => '2.jpg'
        ]);

        Trainer::create([
            'name' => 'mohammad alhalabi',
            'specialize' => 'dentist',
            'image' => '3.jpg'
        ]);

        Trainer::create([
            'name' => 'khaldoun alhalabi',
            'specialize' => 'doctor',
            'image' => '4.jpg'
        ]);

        Trainer::create([
            'name' => 'khaldoun alhalabi',
            'specialize' => 'english teacher',
            'image' => '5.jpg'
        ]);
    }
}
