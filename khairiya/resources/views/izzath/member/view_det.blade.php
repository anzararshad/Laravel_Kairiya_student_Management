@extends('izzath.library')
@section('section')
@include('izzath.member.lib_btn')

<div class="col-md-12 view_det">
  <div class="heading" style="padding: 0px; color: rgb(103, 103, 103); font-family: f23;">
    <label for=""><h2 class="h2">Member Details</h2></label>
  </div>

  <div class="view_member">
    <table class="table table-bordered">
      <tr>
        <th>No. </th>
        <th>Reg No</th>
        <th>Name</th>
        <th>Class </th>
        <th>Books borrowed</th>
        <th>Penalty</th>
        <th >Status</th>
      </tr>

      <tr>
        <td>01.</td>
        <td>IT 16152038</td>
        <td>M Izzath Bisthamy</td>
        <td>9C</td>
        <td>1. Rich Dad Poor Dad</td>
        <td>1500 Rs.</td>
        <td>
          <button type="button" class="btn btn-success" name="button">Pay Penalty</button>
          <button type="button" class="btn btn-warning" name="button">Edit Member</button>
          <button type="button" class="btn btn-danger" name="button">Remove Member</button>

        </td>
      </tr>
    </table>
  </div>
</div>
@endsection
