<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class pay_Fee_control extends Controller
{

  function pay_Fee(){

  $addno =request()->input('Addmission_no');
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

    if($addmissionCount==0){


    $vali = \DB::table('student')->select('Addmission_no')
                               ->where('Addmission_no', '=',$addno)
                               ->count();


                               if($vali>0){
                                Session::put('Addmission',$addno);
                                return redirect('payment');
                               }
                               else {
                                 return back()->with('fail','Invalid addmission no..Try Again');
                               }


  }

else{
  echo "<script>alert('This addmission have already paid for this semester');window.location.href='pay_Fee';</script>";
}
}
}



 ?>
