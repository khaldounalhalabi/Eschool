<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_student', function (Blueprint $table)
        {
            $table->id();
            $table->UnsignedBigInteger('course_id')->nullable() ;
            $table->foreign('course_id')->references('id')->on('courses') ;
            $table->UnsignedBigInteger('student_id')->nullable() ;
            $table->foreign('student_id')->references('id')->on('students') ;
            $table->enum('status' , ['approve' , 'regect' , 'pending'])->default('pending') ;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_student');
    }
}
