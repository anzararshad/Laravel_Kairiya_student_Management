@extends('arshad.student')
@section('section')
@include('arshad.student.addStudent_btn')
<?php
 $id=$_SERVER['QUERY_STRING'];

 $qry = DB::table('student')
            ->where('Addmission_no','=',$id)
            ->get();

            foreach ($qry as $val) {
              $name =$val->fullname;
                $add =$val->Address;
                  $number=$val->number;
                    $division=$val->division;

           }
?>
<form action="UpdateStudent" method="post"  enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="form-group col-md-6">
   <label for="">Addmission No</label>
   <input type="text"  class="form-control" name="addno" value="{{$id}}" readonly="readonly" >
  </div>
<div class="form-group col-md-6">
 <label for="">Full Name:</label>
 <input type="text"  class="form-control" name="fullname" value="{{$val->fullname}}" required>
</div>
<div class="form-group col-md-6">
 <label for="">Address</label>
 <input type="text"  class="form-control" name="Address" value="{{$val->Address}}" required>
</div>

<div class="form-group col-md-6">
 <label for="">Contact Number</label>
 <input type="text"  class="form-control" name="Cnumber" value="{{$val->number}}" required>
</div>

<div class="form-group col-md-6">
 <label for="">Division</label>
 <input type="text"  class="form-control" name="Div" value="{{$val->division}}" required>
</div>
<div class="form-group col-md-12">
  <input type="submit" name="" class="btn btn-success" value="Update" required>
</div>
</form>


@endsection
