<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
class viewTeacherControl extends Controller
{
function change_teach(){
$tid =request()->input('tid');
$class =request()->input('class');
$q3=\DB::table('staff')->select('regNo')
                   ->where('regNo',$tid)
                    ->count();

if($q3>0){
  $q3=\DB::table('staff')->select('name')
                     ->where('regNo',$tid)
                      ->get();
                      $idcount = \DB::table('classmanage')->select('TeacherId')
                                                       ->where('TeacherId', '=',$tid)
                                                       ->count();

                      foreach ($q3 as $value) {
                        $name=$value->name;
                      }
                      if($idcount==0){
                      $q4=\DB::table('classmanage')
                                         ->where('class',$class)
                                          ->update(['class_teacher' =>$name,'TeacherId'=>$tid]);
                                          echo "<script>alert('assigned succesfully');window.location.href='view_teacher';</script>";

                                     }
                                     else {

                                       echo "<script>alert('This Teacher Already Assigned');window.location.href='view_teacher';</script>";
                                     }

}

else {

    echo "<script>alert('Access Denied.This person not exist');window.location.href='view_teacher';</script>";
}

}


}
 ?>
