@extends('arshad.student')
@section('section')
<?php

 $id=$_SERVER['QUERY_STRING'];

 $qry = DB::table('student')
            ->where('Addmission_no','=',$id)
            ->get();


 foreach ($qry as $val) {
   $img =$val->image;
   $name=$val->fullname;
   $parent=$val->prntName;
   $JoinDate=$val->joinDate;
   $JoindGrade=$val->Grade;
   $currGrade=$val->currentGrade;
   $div=$val->division;
}


?>
<form class="" method="post">

  <div class="text-center form-group col-md-12">
    <img src="img/studentImage/{{$img}}" width="300px" height="300px"class="img-rounded" alt="This student Image Not Available" >
  </div>

  <div class="form-group col-md-6">
   <label for="">Full Name:</label>
   <input type="text"  class="form-control"  name="fullname" value="{{$name}}" disabled>
  </div>
  <div class="form-group col-md-6">
   <label for="">Parents Name</label>
   <input type="text"  class="form-control"  name="fullname" value="{{$parent}}" disabled>
  </div>
  <div class="form-group col-md-6">
   <label for="">Joind Date</label>
   <input type="text"  class="form-control"  name="fullname" value="{{$JoinDate}}" disabled>
  </div>
  <div class="form-group col-md-6">
   <label for="">Joined Grade:</label>
   <input type="text"  class="form-control"  name="fullname" value="{{$JoindGrade}}" disabled>
  </div>
  <div class="form-group col-md-6">
   <label for="">Current Grade:</label>
   <input type="text"  class="form-control"  name="fullname" value="{{$currGrade}}" disabled>
  </div>
  <div class="form-group col-md-6">
   <label for="">Current Division:</label>
   <input type="text"  class="form-control"  name="fullname" value="{{$div}}" disabled>
  </div>

</form>




@endsection
