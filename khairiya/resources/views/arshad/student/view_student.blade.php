@extends('arshad.student')
@section('section')
<br>
@include('arshad.student.addStudent_btn')
<script type="text/javascript">
$(document).ready(function () {

    (function ($) {

        $('#filter').keyup(function () {

            var rex = new RegExp($(this).val(), 'i');
            $('.searchable tr').hide();
            $('.searchable tr').filter(function () {
                return rex.test($(this).text());
            }).show();

        })

    }(jQuery));

});

</script>

    <div class="input-group"> <span class="input-group-addon">Student Admission No:</span>

    <input id="filter" type="text" class="form-control" placeholder="Student Search">
</div>
<div class="view_member">
  <?php
    $notify= \DB::table('student')->select('id','Addmission_no','fullname','number','currentGrade','division')->get();


   $fullname ="bfhshb";
  ?>
<table  class="table table-bordered">

  <thead class="thead-inverse">
    <tr>
      <th>Addmission No</th>
      <th>Name</th>
        <th>Grade</th>
        <th>Devision</th>
      <th>Contact No</th>
      <th>Option</th>
    </tr>
  </thead>
  <tbody class="searchable">
    @foreach($notify as $record)
    <tr>
      <td scope="row">{{ $record ->Addmission_no}}</td>
      <td align="center">{{ $record ->fullname}}</td>
        <td align="center">{{ $record ->currentGrade}}</td>
        <td align="center">{{ $record ->division}}</td>
        <td align="center">{{ $record ->number}}</td>
      <td align="center"> <a href="record_delete?{{$record->id}}" type="submit" class="btn btn-danger">Delete</a>
       <a href="view_h?{{$record->Addmission_no}}" type="submit" class="btn btn-danger">ViewDetails</a>
       <a href="update?{{$record->Addmission_no}}" type="submit" class="btn btn-danger">UpdateDetails</a>
      </td>
    </tr>
  @endforeach

  </div>
</div>
@endsection
