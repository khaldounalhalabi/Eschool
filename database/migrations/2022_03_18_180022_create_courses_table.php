<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table)
        {
            $table->id();
            $table->string('name') ;

            $table->UnsignedBigInteger('category_id') ;
            $table->foreign('category_id')->references('id')->on('categories') ;

            $table->UnsignedBigInteger('trainer_id') ;
            $table->foreign('trainer_id')->references('id')->on('trainers') ;

            $table->string('small_description') ;
            $table->text('description') ;
            $table->integer('price') ;
            $table->string('image') ;
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
        Schema::dropIfExists('courses');
    }
}
