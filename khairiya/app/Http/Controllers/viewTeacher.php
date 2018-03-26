<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class viewTeacher extends Controller{

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

function change(){
  $id= $this->getId();
  Session::put('id',$id);
  return redirect('assign_classTeachers');
}




}

  ?>
