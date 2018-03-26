<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class paymentControl extends Controller
{
function getDetails(){


  $addno =request()->input('addno');
  $ayear =request()->input('ayear');
  $semester =request()->input('asemi');
  $total =request()->input('total');
  $currdate=date('Y-m-d');


  $valiyear= \DB::table('feesdetails')->select('academic_year')
    ->orderby('id','desc')
    ->limit(1)
   ->get();

    foreach($valiyear as $year){
          $vYear =$year->academic_year;
    }

  $addmissionCount =\DB::table('fees')->select('Addmission_no')
                                   ->where([['Addmission_no','=',$addno],['ayear','=',$vYear]])
                                 ->count();


  $q =\DB::table('fees')->insert(['Addmission_no'=>$addno,'ayear'=>$ayear,'semester'=>$semester,'paymentDate'=>$currdate,'total'=>$total]);
  if($q){

    echo "<script>alert('Payement Added Sucessfully .....');window.location.href='ReportSelecter';</script>";

  }
  else {
  echo "<script>alert('Error on Adding Payment');window.location.href='pay_Fee';</script>";

  }
}

function report(){

echo "Arshad";
$date="12-12-2017";
$sdate=date("Y");

 $yearToCompare= date('Y',strtotime($date));

 $xx=(int)$sdate;
 $yy=(int)$yearToCompare;
 $mm=$xx-$yy;
 echo $mm;
}
}


?>
