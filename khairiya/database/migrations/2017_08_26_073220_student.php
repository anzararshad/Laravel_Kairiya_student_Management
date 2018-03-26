<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Student extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('student', function (Blueprint $table) {
             $table->increments('studentId');
             $table->string('StudentName');
             $table->string('ParentNic');
             $table->string('Parenjob');
             $table->string('DofB');
             $table->integer('ContactNo');
             $table->string('AddmissionNo');
             $table->string('siblingsAddmissionNo');
             $table->string('profilePic');
              $table->string('joinDate');
              $table->string('ParentName');
              
         });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::dropIfExists('student');
     }
}
