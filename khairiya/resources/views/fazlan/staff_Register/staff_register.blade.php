@extends('fazlan.staff')
@section('section')

<div class="col-md-12 view_det">
  <div class="heading" style="padding: 0px; color: rgb(103, 103, 103); font-family: f23;">
    <label for=""><h2 class="h2">Register Staff</h2></label>
  </div>

  <div class="add_member">
    <div class="col-md-10">
      <div class="form-group col-md-6">
        <label for="">Book Id :</label>
        <input type="text" class="form-control" placeholder="Book Id" name="" value="">
      </div>
      <div class="form-group col-md-6">
        <label for="">ISBN :</label>
        <input type="text" class="form-control" placeholder="Book Title here.." name="" value="">
      </div>
      <div class="form-group col-md-6">
        <label for="">Title :</label>
        <input type="text" class="form-control" placeholder="Book Title here.." name="" value="">
      </div>
      <div class="form-group col-md-6">
        <label for="">Author :</label>
        <input type="text" class="form-control" placeholder="Author/s here.." name="" value="">
      </div>
      <div class="form-group col-md-6">
        <label for="">Price :</label>
        <input type="text" class="form-control" placeholder="Price here.." name="" value="" >
      </div>
      <div class="form-group col-md-6">
        <label for="">Publication :</label>
        <input type="text" class="form-control" placeholder="Publication name here.." name="" value="">
      </div>
      <div class="form-group col-md-6">
        <label for="">Published Date :</label>
        <input type="text" class="form-control" placeholder="Published date here.." name="" value="">
      </div>

      <div class="form-group col-md-12" >
        <a href="#" class="btn btn-warning">Add Book</a>
      </div>
    </div>

  </div>
</div>
@endsection
