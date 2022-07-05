<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use App\Models\Message;
use App\Models\Student;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use App\Exceptions\Handler;
use voku\helper\ASCII;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function newsletter(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|max:191' ,
        ]) ;
        Newsletter::create($data) ;
        return back() ;
    }

    public function contact(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:191' ,
            'email' => 'required|email|max:191',
            'subject' => 'nullable|string|max:191' ,
            'message' => 'required|string|max:10000'
        ]);
        Message::create($data) ;
        return back();
    }

    public function enroll(Request $request)
    {

        $data = $request->validate([
            'name' => 'nullable|string|max:191',
            'email' => 'required|email|max:191',
            'specialize' => 'string|nullable|max:191',
            'course_id' => 'required|string|exists:courses,id' ,
        ]);

        $student = Student::create([
            'name' => $data['name'] ,
            'email' => $data['email'] ,
            'specialize' => $data['specialize'] ,
        ]) ;

        $student_id = $student->id ;
        DB::table('course_student')->insert([
            'course_id' => $data['course_id'],
            'student_id' => $student_id,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return back();
    }

}
