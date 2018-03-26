<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class studentController extends Controller
{


    function add_student(){

      // $this->validate(request(),[
      //     'fullname'->'required',
      //
      // ]);


      $fullname =request()->input('fullname');
      $address=request()->input('Address');
      $DofB=request()->input('DofB');
      $parent_name=request()->input('parent_name');
      $number=request()->input('number');
      $occupation=request()->input('occupation');
      $nic=request()->input('nic');
      $sisAdmission=request()->input('sisAdmission');
      $joinDate=date("Y.m.d");


      $image = request()->file('image');
      $des_path = 'img/studentImage/';
      $image_name = request()->image->getClientOriginalName();
      $image->move($des_path, $image_name);

      if(preg_match('/^[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][v|V]$/',$nic)){
          if(preg_match('/^[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]/',$number)){
            $q = \DB::table('student')->insert(['fullname'=>$fullname,'image'=>$image_name , 'Address'=>$address, 'DofB'=>$DofB,'prntName'=>$parent_name,'number'=>$number,'occupation'=>$occupation,'nic'=>$nic,'sisAdmission'=>$sisAdmission,'joinDate'=>$joinDate]);

              if($q){
                      // Location:student\gen_addmssion.blade.php
                     // return back()->header('Location','');

                      Session::put('key',$DofB);
                     return redirect('gen_addmssion');
                       
                  }
                   }
    else{
        // return back()->with('fail','PHONE NUMBER ERROR');
        echo "<script>alert('PHONE NUMBER ERROR');window.location.href='add_student';</script>";
        // return redirect('add_student');
      }
    }
    else{
          echo "<script>alert('Nic no is error');window.location.href='add_student';</script>";

      }






    }
}
