<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FeesDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('feesDetails', function (Blueprint $table) {
             $table->increments('Academic Year');
             $table->string('Grade');
             $table->string('semesterFee');
             $table->string('Extrafee');
             $table->string('TotalFee');
             $table->string('WatPercentage');
            $table->string('FinePerday');
             $table->string('fineDate');
         });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::dropIfExists('feesDetails');
     }
}
