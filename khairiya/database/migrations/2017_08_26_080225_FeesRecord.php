<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FeesRecord extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('FeesRecord', function (Blueprint $table) {
             $table->string('AddmissionNo');
             $table->string('ReciptNo');
             $table->string('semester');
             $table->string('Grade');
             $table->string('Date');
             $table->string('totalFees');
            
         });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::dropIfExists('FeesRecord');
     }
}
