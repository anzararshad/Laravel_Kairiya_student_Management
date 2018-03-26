@extends('arshad.student')
@section('section')
@include('arshad.class_Management.class_topbtn')
<?php
$tag=Session::get('id');
$vali = \DB::table('classmanage')->select('class')
                           ->where('id','=',$tag)
                           ->get();
                           foreach ($vali as $value) {
                                $grade=$value->class;
                           }

 ?>
 <br />
<form action="change_teach" method="post" id="">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
     {{ csrf_field() }}
<div class="form-group col-md-6">


  <label for="">Teacher id:</label>
  <input type="text"  class="form-control" placeholder="Add Teacher Id here" name="tid" value="" required>
<br>
</div>

<div class="form-group col-md-6">
  <label for="">Class:</label>
  <input type="text"  class="form-control" placeholder="Add Teacher Id here" name="class" value="<?php echo $grade; ?>" required>
</div>

<div class="form-group col-md-6">

    </div>
<div class="form-group col-md-6">
  <input type="submit" class="btn btn-success"  value="Assign Teacher">
    </div>
  </form>

@endsection
