<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\SiteContent;
use App\Models\Student;
use App\Models\Testemonial;
use App\Models\Trainer;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {

        $data['banner'] = SiteContent::select('content')->where('name' , 'banner')->first() ;
        $data['courses_content'] = SiteContent::select('content')->where('name' , 'courses')->first() ;
        $data['features'] = SiteContent::select('content')->where('name' , 'features')->first() ;
        $data['testemonials_content'] = SiteContent::select('content')->where('name' , 'testemonials')->first() ;
        $data['courses'] = Course::select('id', 'name', 'small_description', 'category_id', 'trainer_id', 'image', 'price',)
        ->orderBy('id', 'desc')
        ->take(3)
        ->get();

        $data['students_count'] = Student::count() ;
        $data['trainers_count'] = Trainer::count();
        $data['courses_count'] = Course::count();
        $data['testemonials'] = Testemonial::all() ;


        return view('front.index')->with($data);
    }
}
