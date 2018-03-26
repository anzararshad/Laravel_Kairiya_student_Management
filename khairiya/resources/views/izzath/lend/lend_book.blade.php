@extends('izzath.library')
@section('section')
@include('izzath.lend.lend_btn')
<div class="col-md-12 view_det">
  <div class="heading" style="padding: 0px; color: rgb(103, 103, 103); font-family: f23;">
    <label for=""><h2 class="h2">Lend a Book</h2></label>
  </div>

  <div class="lend_book">
      <div class="col-md-10">
        <div class="form-group col-md-6">
          <label for="">Book ID / ISBN :</label>
          <input type="text" class="form-control" placeholder="Student Registration Number here.." name="" value="">
        </div>
        <div class="form-group col-md-6">
          <label for="">Student Reg No. :</label>
          <input type="text" class="form-control" placeholder="Student Registration Number here.." name="" value="">
        </div>
        <div class="form-group col-md-6">
          <label for="">Date Lended :</label>
          <input type="text" class="form-control" placeholder="Student Registration Number here.." name="" value="">
        </div>
        <div class="form-group col-md-6">
          <label for="">Due Date :</label>
          <input type="text" class="form-control" placeholder="Student Registration Number here.." name="" value="">
        </div>

        <div class="form-group col-md-12" >
          <a href="#" class="btn btn-warning">Lend the Book</a>
        </div>
      </div>
  </div>
</div>
@endsection
