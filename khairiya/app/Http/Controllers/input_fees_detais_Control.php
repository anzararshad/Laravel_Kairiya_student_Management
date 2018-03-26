<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;

class input_fees_detais_Control extends Controller{

function input_fees_detais(){
      $difff=0;
      $A_year =request()->input('A_year');
       $Ldate =request()->input('Ldate');


       $today_dt = new DateTime($A_year);
       $expire_dt = new DateTime($Ldate);

  if ($expire_dt > $today_dt) {


      $Adate=$A_year;
       $yearToCompare= date('Y',strtotime($Adate));
       $INTyearToCompare=(int)$yearToCompare;

       $LastAcademicYear= \DB::table('feesdetails')->select('academic_year')->orderby('id','desc')->limit('1')->get();
       foreach ($LastAcademicYear as $ls) {
         $LastAcademicYear= $ls->academic_year;
       }

        $Bdate=$LastAcademicYear;
         $previousAcademic= date('Y',strtotime($Bdate));
         $INTpreviousAcademic=(int)$previousAcademic;

         $difff=$INTyearToCompare-$INTpreviousAcademic;
        echo $difff;
        if($difff>0){

          $StudentAddmission= \DB::table('student')->get();
          foreach($StudentAddmission as $m){

              $adNo=$m->Addmission_no;
              $currGrade=$m->currentGrade;
              $add=$currGrade+$difff;
              $q3=\DB::table('student')
                                 ->where('Addmission_no',$adNo)
                                  ->update(['currentGrade' =>$add]);

         }

       }

        $Semi =request()->input('Semi');
        $one =request()->input('one');
        $total1 =request()->input('total1');
        $two =request()->input('two');
        $total2 =request()->input('total2');;
        $three =request()->input('three');
        $total3 =request()->input('total3');

        $four =request()->input('four');
        $total4 =request()->input('total4');
        $five =request()->input('five');
        $total5 =request()->input('total5');
        $six =request()->input('six');
        $total6 =request()->input('total6');

        $seven =request()->input('seven');
        $total7 =request()->input('total7');
        $eight =request()->input('eight');
        $total8 =request()->input('total8');
        $nine =request()->input('nine');
        $total9 =request()->input('total9');

        $ten =request()->input('ten');
        $total10 =request()->input('total10');
        $eleven =request()->input('eleven');
        $total11 =request()->input('total11');
        $twelve =request()->input('twelve');
        $total12 =request()->input('total12');


         $fine =request()->input('fine');

         $extension =request()->input('extension');
         $wat =request()->input('wat');
         $faci =request()->input('faci');


   $qu = \DB::table('feesdetails')->insert(['academic_year'=>$A_year ,'Semi'=>$Semi,'fine'=>$fine,'Ldate'=>$Ldate,'extension'=>$extension,'wat'=>$wat,'facilityFee'=>$faci]);

        $q3=\DB::table('feesd')
                           ->where('Grade',$one)
                            ->update(['total' =>$total1]);
                            $q4=\DB::table('feesd')
                                               ->where('Grade',$two)
                                                ->update(['total' =>$total2]);
                                                $q5=\DB::table('feesd')
                                                                   ->where('Grade',$three)
                                                                    ->update(['total' =>$total3]);
                                                                    $q6=\DB::table('feesd')
                                                                                       ->where('Grade',$four)
                                                                                        ->update(['total' =>$total4]);
                                                                                        $q7=\DB::table('feesd')
                                                                                                           ->where('Grade',$five)
                                                                                                            ->update(['total' =>$total5]);
                                                                                                            $q8=\DB::table('feesd')
                                                                                                                               ->where('Grade',$six)
                                                                                                                                ->update(['total' =>$total6]);
                                                                                                                                $q9=\DB::table('feesd')
                                                                                                                                                   ->where('Grade',$seven)
                                                                                                                                                    ->update(['total' =>$total7]);
                                                                                                                                                    $q10=\DB::table('feesd')
                                                                                                                                                                       ->where('Grade',$eight)
                                                                                                                                                                        ->update(['total' =>$total8]);
                                                                                                                                                                        $q11=\DB::table('feesd')
                                                                                                                                                                                           ->where('Grade',$nine)
                                                                                                                                                                                            ->update(['total' =>$total9]);
                                                                                                                                                                                            $q12=\DB::table('feesd')
                                                                                                                                                                                                               ->where('Grade',$ten)
                                                                                                                                                                                                                ->update(['total' =>$total10]);
                                                                                                                                                                                                                $q13=\DB::table('feesd')
                                                                                                                                                                                                                                   ->where('Grade',$eleven)
                                                                                                                                                                                                                                    ->update(['total' =>$total11]);
                                                                                                                                                                                                                                    $q14=\DB::table('feesd')
                                                                                                                                                                                                                                                       ->where('Grade',$twelve)
                                                                                                                                                                                                                                                        ->update(['total' =>$total12]);


return redirect('pay_Fee');
          // if($qu){
          //   // Location:student\gen_addmssion.blade.php
          //   // return back()->header('Location','');
          // //  return redirect('gen_addmssion');
          // return back()->with('value passed','not inserted');
          // }else{
          //   return back()->with('fail','not inserted');
          // }

}
else{
  echo "<script>alert('Error on Adding Payment');window.location.href='input_fees_detais';</script>";
}

}
}

?>
