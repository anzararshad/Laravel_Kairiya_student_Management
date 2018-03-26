@extends('arshad.student')
@section('section')
@include('arshad.Fee.fee_btn')
<br><br><br>
<div class="view_member">
<table  class="table table-bordered">

<thead class="thead-inverse">
  <tr>
    <th>Addmission No:</th>
    <th>Name</th>
    <th>Special Fees</th>
    <th>Semestor Fees</th>
      <th>Total Payment</th>
      <th>Option:</th>
  </tr>
</thead>
<tbody>
  <tr>
    <th scope="row">IT160323165</th>
    <td align="center">A.Arshad</td>
      <td align="center">1000</td>
      <td align="center">100000</td>
      <td align="center">101000</td>
    <td align="center"><button type="button" class="btn btn-success"  name="button" onclick="makeChange()">Old Records</button>
    <button type="button" class="btn btn-warning" name="button">Print</button></td>
  </tr>
</div>


@endsection
