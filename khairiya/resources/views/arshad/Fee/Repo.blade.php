@extends('arshad.student')
@section('section')
@include('arshad.Fee.fee_btn')
<?php

// $LastAcademicYear= \DB::table('feesdetails')->select('academic_year')->orderby('id','desc')->limit('1')->get();
// echo $LastAcademicYear;
$Deatils= \DB::table('fees')->get();


?>

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
      <tr>
       <td>{{$year->Addmission_no}}</td>
       <td>{{$year->ayear}}</td>
       <td>{{$year->semester}}</td>
       <td>{{$year->paymentDate}}</td>
       <td>{{$year->total}}</td>
     </tr>
    @endforeach

  </tbody>
</table>


        <script type="text/javascript">
            window.print();
        </script>

@endsection
