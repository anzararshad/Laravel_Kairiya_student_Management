@extends('arshad.student')
@section('section')
<?php

$Deatils= \DB::table('fees')
  ->orderby('id','desc')
  ->limit(1)
 ->get();

       // $AddmissionNo =$year->Addmission_no;
       // $year1=$year->ayear;
       // $semi =$year->semester;
       // $Paydate =$year->paymentDate;
       // $TOT=$year->total;


?>

<div class="text-center form-group col-md-12">
  <img src="img/studentImage/logo.jpg" width="300px" height="300px"class="img-rounded" alt="This student Image Not Available" >
</div>

<table  class="table table-bordered">
  <thead class="thead-inverse">
    <tr>
      <th>Addmission No:</th>
      <th>Semester Commance Date</th>
      <th>Semester</th>
      <th>PayementDate</th>
      <th>Total</th>
</tr>
  </thead>
  <tbody>
     @foreach($Deatils as $year)
       <td>{{$year->Addmission_no}}</td>
       <td>{{$year->ayear}}</td>
       <td>{{$year->semester}}</td>
       <td>{{$year->paymentDate}}</td>
       <td>{{$year->total}}</td>
       @endforeach
  </tbody>
</table>


        <script type="text/javascript">
            window.print();
        </script>

@endsection
