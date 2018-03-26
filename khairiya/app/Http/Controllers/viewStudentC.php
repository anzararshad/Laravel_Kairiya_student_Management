<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class viewStudentC extends Controller
{
  function getId(){
         $url = $_SERVER['REQUEST_URI'];
         if(strpos($url, '?')==true){
           $url = explode("?",$url)[1];
         }
         if($url.contains('%20')){
           $url = str_replace('%20',' ', $url);
         }
         if($url > 0){
           return $url;
         }
         else {
           return 0;
         }
         return $url;
      }

      function record_delete(){
           $id = $this->getId();
           if(\DB::table('student')->where('id',$id)->delete()){
                return back()
                ->with('success','Successfull Deleted');
           }
      }





}
