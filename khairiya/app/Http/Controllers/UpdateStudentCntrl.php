<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class UpdateStudentCntrl extends Controller
{
  function SaveFee(){
    foreach ($_POST['fee'] as $key => $value) {
      ++$key;
      \DB::table('feesd')->where('Grade',$key)->update(['total'=>$value]);

    }
    return redirect('ViewFeeDetails')
    ->with('success', 'Changes has been successfully Updated');
  }

  function UpdateStudentCntrl(){
    $id =request()->input('addno');
    $fullname =request()->input('fullname');
    $Address =request()->input('Address');
    $Cnumber =request()->input('Cnumber');
    $Div =request()->input('Div');


    $q3=\DB::table('student')
                       ->where('Addmission_no',$id)
                        ->update(['fullname' =>$fullname]);
    $q4=\DB::table('student')
        ->where('Addmission_no',$id)
       ->update(['Address' =>$Address]);
       $q4=\DB::table('student')
           ->where('Addmission_no',$id)
          ->update(['number' =>$Cnumber]);
          $q5=\DB::table('student')
              ->where('Addmission_no',$id)
             ->update(['division' =>$Div]);
               echo "<script>alert('DetailsUpdated Sucessfully');window.location.href='view_student';</script>";
}
}
 ?>
