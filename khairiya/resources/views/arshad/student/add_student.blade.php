@extends('arshad.student')
@section('section')
<br>
@include('arshad.student.addStudent_btn')
<script type="text/javascript">

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };


function validateForm()
        {
            var a=document.forms["Form"]["answer_a"].value;
            var b=document.forms["Form"]["answer_b"].value;
            var c=document.forms["Form"]["answer_c"].value;
            var d=document.forms["Form"]["answer_d"].value;
            if (a==null || a=="",b==null || b=="",c==null || c=="",d==null || d=="")
            {
                alert("Please Fill All Required Field");
                return false;
            }
        }
    </script>



<br>
<div class="col-md-12 view_det">
  <div class="heading" style="padding: 0px; color: rgb(103, 103, 103); font-family: f23;">
    <label for=""><h2 class="h2"><u>Student Registration</u></h2></label>
  </div>
  <form action="add_student" method="post" id="" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <!-- {{ csrf_field() }} -->


    <br>
    <div class="form-group col-md-6">

      <label for="">UPLOAD IMAGE OF A STUDENT :</label>
      <img class="form-control" id="uploadPreview" style="width: 300px; height: 300px;" />
      <input type="file" class="form-control" id="uploadImage" style="width:300px;" name="image" onchange="PreviewImage();"/ required>

    </div>
<br><br>
   <div class="form-group col-md-6">
    <label for="">Full Name:</label>
    <input type="text"  class="form-control" placeholder="Full Name Of The Student" name="fullname" value="" required>
  </div>
  <div class="form-group col-md-6">
    <label for="">Residential Address:</label>
    <input type="text" class="form-control" placeholder="Current Address Of The Student" name="Address" value="" required>
  </div>
  <div class="form-group col-md-6">
    <label for="">Date Of Birth:</label>
    <input id="bdate" type="date" class="form-control" name="DofB" value="" max="<?php $d =date("Y"); $year = $d-5; $month = date("m-d"); echo $year."-".$month ;?>" required>
  </div>

  <div class="heading" style="padding: 0px; color: rgb(103, 103, 103); font-family: f23;">
    <label for=""><h2 class="h2"><u>Parent Details</u></h2></label>
  </div>
  <div class="form-group col-md-6">
    <label for="">Parents Name:</label>
    <input type="text"  class="form-control" placeholder="Full Name Of The parent" name="parent_name" value="" required>
  </div>
  <div class="form-group col-md-6">
    <label for="">Contact No:</label>
    <input type="text" class="form-control" placeholder="Contact Name OF The Parent.." name="number" value="" required>
  </div>
  <div class="form-group col-md-6">
    <label for="">Parent Occupation:</label>
    <input type="text"  class="form-control" placeholder="Full Name Of The Student" name="occupation" value="" required>
  </div>
  <div class="form-group col-md-6">
    <label align="left" for="">Parent NIC No:</label>
    <input align="left" type="text"  class="form-control" placeholder="Full Name Of The Student" name="nic" value="" required>
  </div>
  <div class="form-group col-md-6">
    <label align="left" for="">Addmission No Of Sister:</label>
    <input align="left" type="text"  class="form-control" placeholder="If Studied Only...." name="sisAdmission" value="">
  </div>
  <div class="form-group col-md-12">
    <input type="submit" name="" class="btn btn-success" value="Submit" required>
  </div>
</div>

<?php
  $value = \DB::table('student')->select('fullname')->get();

?>

      @foreach($value as $record)
        <strong>{{ $record -> fullname }}</strong>
      @endforeach

</form>


@endsection
