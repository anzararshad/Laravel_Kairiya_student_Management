<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
class divisionControl extends Controller
{
function expand(){
$class=request()->input('grade');
$div=request()->input('div');
$cap=request()->input('cap');
$grade=$class.$div;

$curr=0;
// $cnt = DB::table('classmanage')->select('class')
//                                   ->where('class','=',$grade)
//                                   ->count();
// echo $cnt;
// if($cnt===0){
$exists = DB::table('classmanage')->where('class',$grade)->first();
if(!$exists){
$query=\DB::table('classmanage')->insert(['class'=>$grade,'current_students'=>$curr,'total_students'=>$cap]);
}
else {

  echo "this table exist";
}
// }
// else {
//           return back()->with('fail','not inserted');
// }

}
function monitor(){

  $addmission=request()->input('add');
  $grade=request()->input('cls');
  $exists = DB::table('classmanage')->where('class',$grade)->first();

if($exists){
  $q3=\DB::table('classmanage')
                     ->where('class',$grade)
                      ->update(['monitor' =>$addmission]);

}
   // not there


}
}
