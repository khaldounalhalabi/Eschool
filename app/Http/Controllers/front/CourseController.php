<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index($id)
    {
        $data['category'] = Category::findOrFail($id) ;
        $data['courses'] = Course::where('category_id' , $id)->paginate(3) ;
        //dd($data) ;
        return view('front/courses/category')->with($data) ;
    }
    public function  course_details($id , $course_id)
    {
        $data['course'] = Course::findOrFail($course_id) ;
        return view('front/courses/course_details')->with($data) ;
    }
}
