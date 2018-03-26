@extends('izzath.library')
@section('section')
@include('izzath.member.lib_btn')
<div class="col-md-12 view_det">
  <div class="heading" style="padding: 0px; color: rgb(103, 103, 103); font-family: f23;">
    <label for=""><h2 class="h2">Add Member</h2></label>
  </div>

  <div class="add_member">
      <div class="col-md-10">
        <div class="form-group col-md-6">
          <label for="">Student Reg No :</label>
          <input type="text" class="form-control" placeholder="Student Registration Number here.." name="" value="">
        </div>

        <div class="form-group col-md-12" >
          <a href="#" class="btn btn-warning">Add as a Member</a>
        </div>
      </div>
  </div>
</div>
@endsection
