<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $data['settings'] = Setting::first() ; 
        return view('front.contact')->with($data) ; 
    }
}
