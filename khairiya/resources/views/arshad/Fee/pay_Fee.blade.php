@extends('arshad.student')
@section('section')
@include('arshad.Fee.fee_btn')


<br><br>
<form action="pay_Fee" method="post" id="">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group col-md-6">
    <label for="">Addmisson No:</label>
    <input type="text" class="form-control" placeholder="Addmission no of student" name="Addmission_no" value="" required/>
  </div>

  <div class="form-group col-md-6">
<hr style="visibility: hidden;">
      </div>
<br><br><br><br><br>
  <div class="form-group col-md-6">
    <input class="btn btn-success text-left" type="submit" value="GO" >

      </div>
      @if($mes = Session::get('succ'))
      <div class="alert alert-sccess col-md-12 ">
          <strong>{{$mes}}</strong>
      </div>
      @endif
      @if($mes = Session::get('fail'))
      <div class="alert alert-sccess col-md-12 ">
          <strong>{{$mes}}</strong>
      </div>
      @endif

    </form>

@endsection
