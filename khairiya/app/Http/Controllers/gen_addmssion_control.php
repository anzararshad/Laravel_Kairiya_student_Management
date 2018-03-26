<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Cookie;



class gen_addmssion_control extends Controller
{

function gen_addmssion(){
                  $genadd = request()->input('genadd');
                  Cookie::forever('genadd', $genadd);
                $aye = request()->input('aye');
                $asemi = request()->input('asemi');

                Session::put('aye',$aye);
                Session::put('asemi',$asemi);


}

  function get_devision(){

    $grade = request()->input('grade');
    $cstudent=request()->input('cstudent');
     $faciF =request()->input('faciF');
    $semiF =request()->input('semiF');

      $value = \DB::table('classmanage')->select('current_students','total_students')
                                        ->where('class','=',$grade)
                                        ->get();
                                        foreach ($value as  $xx) {
                                          $value1=$xx->current_students;

                                          $value2=$xx->total_students;
                                        }
                                        echo $value1;
                                        Session::put('cstudent',$value1);
                                        Session::put('tstudent',$value2);

                                $getGrade = substr($grade, 0, 1);

                               $semiFee = \DB::table('feesd')->select('total')
                                                            ->where('Grade','=',$getGrade)
                                                           ->get();
                                                           foreach($semiFee as $q){
                                                                $number =$q->total;

                                                           }
                                    Session::put('done',$number);
                                 $facilityFee = \DB::table('feesdetails')->select('facilityFee')
                                                                     ->orderby('id','desc')
                                                                     ->limit(1)
                                                                      ->get();

                                                                      foreach($facilityFee as $fcs){
                                                                           $facility =$fcs->facilityFee;
                                                                      }
                                  Session::put('grade',$grade);
                                  Session::put('cstudent',$cstudent);
                                  Session::put('faciF',$facility);
                                  Session::put('semiF',$semiF);
                                  // session('grade',$grade);
                             return back()->with("dev",$value)->with('grade',$grade)->with('cstudent',$value1);

                            //    Session::put('dev',$value);
                          //  return View::make('view2')->with($value);

                        }


  function all_submit(){

    $con=\DB::table('student')->select('id')
                                 ->orderby('id','desc')
                                 ->limit(1)
                                 ->get();
                                 foreach ($con as $cc) {
                                   $idd=$cc->id;
                                 }
                                    echo $idd;
                                 $genadd = request()->input('genadd');
                                 $aye = request()->input('aye');
                                 $asemi = request()->input('asemi');
                                 $grade = request()->input('grade');
                                 $cstudent=request()->input('cstudent');
                                 $faciF =request()->input('faciF');
                                 $semiF =request()->input('semiF');
                                 $grd= substr($grade, 0, 1);
                                  $divv= substr($grade, 1, 2);

                                  $incrementClass=$cstudent+1;
                                $currdate=date('Y-m-d');
  //return redirect('add_student');

 $q = \DB::table('fees')->insert(['Addmission_no'=>$genadd ,'ayear'=>$aye, 'semester'=>$asemi,'paymentDate'=>$currdate,'total'=>$semiF]);
 $q2=\DB::table('classmanage')
             ->where('class',$grade )
             ->update(['current_students' =>$incrementClass]);
 $q3=\DB::table('student')
                    ->where('id',$idd)
                     ->update(['Addmission_no' =>$genadd]);
                     $q4=\DB::table('student')
                                        ->where('id',$idd)
                                         ->update(['Grade' =>$grd]);
                                         $q5=\DB::table('student')
                                                            ->where('id',$idd)
                                                             ->update(['currentGrade' =>$grd]);
                                                             $q5=\DB::table('student')
                                                                                ->where('id',$idd)
                                                                                 ->update(['division' =>$divv]);

  return redirect('add_student');
  }



    //$q = \DB::table('student')->insert([''=>$fullname , 'Address'=>$address, 'DofB'=>$DofB,'prntName'=>$parent_name,'number'=>$number,'occupation'=>$occupation,'nic'=>$nic,'sisAdmission'=>$sisAdmission]);

}

?>
