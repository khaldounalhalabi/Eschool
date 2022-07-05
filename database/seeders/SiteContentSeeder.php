<?php

namespace Database\Seeders;

use App\Models\SiteContent;
use Illuminate\Database\Seeder;

class SiteContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // SiteContent::create(
        //     [
        //         'name'=>'banner' ,
        //         'content' => json_encode([
        //             'title' => 'EVERY CHILD YEARNS TO LEARN' ,
        //             'subtitle' => 'Making Your Childs World Better' ,
        //             'description' => "Replenish seasons may male hath fruit beast were seas saw you arrie said man beast whales his void unto last session for bite. Set have great you'll male grass yielding yielding man"
        //         ]) ,

        //     ]
        // ) ;

        SiteContent::create(
            [
                'name' => 'courses',
                'content' => json_encode([
                    'title' => 'Our Courses',
                    'subtitle' => 'A Lot of Categories',
                ]),

            ]
        );

        SiteContent::create(
            [
                'name' => 'features',
                'content' => json_encode([
                    'title' => 'Great features and a lot of advantages',
                    'subtitle' => "Set have great you male grass yielding an yielding first their you're have called the abundantly fruit were man",
                    'feature_title1' => 'feature tile 1' ,
                    'feature_desc2' =>'feature_description1' ,
                    'feature_title2' => 'feature tile 2' ,
                    'feature_desc2' =>'feature_description2' ,
                    'feature_title3' => 'feature tile 3' ,
                    'feature_desc3' =>'feature_description3' ,
                ]),

            ]
        );

        SiteContent::create(
            [
                'name' => 'testemonials',
                'content' => json_encode([
                    'title' => 'Testemonials',
                    'subtitle' => 'Student Testimonials ',
                ]),

            ]
        );
    }
}
