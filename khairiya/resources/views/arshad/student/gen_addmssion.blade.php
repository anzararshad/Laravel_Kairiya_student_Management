

@extends('arshad.student')
@section('section')
<br>
@include('arshad.student.addStudent_btn')


<?php

    $qu = \DB::table('student')->select('id','DofB')
                               ->orderby('id','desc')
                               ->limit(1)
                               ->get();

                               foreach($qu as $q){
                                    $o =$q->id;
                                    $b = $q->DofB;
                               }

                                 Session::put('id',$o);
                                 $df=DATE($b);
                               $time = strtotime($b);
                               $Yt =date("Y",$time);
                               $last = "KH-".$Yt."00".$o;

      $getyear = \DB::table('feesdetails')->select('academic_year','Semi')
                                    ->orderby('id','desc')
                                    ->limit(1)
                                    ->get();

                                   foreach($getyear as $year){
                                        $ayear =$year->academic_year;
                                        $asemi = $year->Semi;
                                                                   }
                                  //sample  $gtt=Session::get('key');
                                    $asd="dhgdsgf";
                                  $firstCharacter = substr($asd, 0, 1);
 ?>
 <script type="text/javascript">
   $(document).ready(function(){
     $('#grade').change(function(){

       $('#first').submit();

     });
 });
   </script>

 <script type="text/javascript">
   $(document).ready(function(){
     $('#grade').change(function(){

       $('#grade').submit();

     });
 });
   </script>


<form action="gen_addmssion" method="post" id="first" >
<div class="form-group col-md-6">
  <label align="left" for="">Generate Addmission No:</label>
  <input align="left" type="text"  class="form-control" placeholder="Generate addmsiiion no:" name="genadd" value="<?php echo $last; ?>" disabled>
</div>
<div class="form-group col-md-6">
  <label align="left" for="">Academic year:</label>
  <input align="left" type="text"  class="form-control" placeholder="Generate addmsiiion no:" name="aye" value="<?php echo $ayear ; ?>" disabled>
</div>
<div class="form-group col-md-6">
  <label align="left" for="">Academic Semester</label>
  <input align="left" type="text"  class="form-control" placeholder="Generate addmsiiion no:" name="asemi" value="<?php echo $asemi; ?>" disabled>
</div>
</form>
<?php
  $value = \DB::table('classmanage')->select('class')->get();
 $fullname ="bfhshb";
?>

<div >
<table  class="table table-bordered">
  <thead class="thead-inverse">
    <tr>
      <th disabled>Grade</th>
      <th>current Students:</th>
      <th>capacity:</th>
      <th>Facility Fee:</th>
      <th>Semester Fees:</th>
      <th>Total Fee:</th>

  </tr>
  </thead>
  <tbody>

    <tr>
      <td scope="row">
        <form action="get_devision" method="post" id="grade" name="grade">
            {{ csrf_field() }}
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <select  class="form-control" name="grade" id="grade"  >
          @foreach($value as $red)
          @if(Session::get('grade') == $red->class)
            <option value='{{$red->class}}' selected>{{$red->class}}</option>
          @else
              <option value='{{$red->class}}'>{{$red->class}}</option>
          @endif
          @endforeach
        </select>

        </td>
  @if($mes=Session::get('dev'))

      <td><input type="text" class="form-control" size="16" value="<?php $gtt=Session::get('cstudent'); echo $gtt; ?>" name="cstudent" disabled/></td>
      <td><input type="text" class="form-control" size="16" value="<?php $gtt=Session::get('tstudent'); echo $gtt; ?>" name="capa" disabled/></td>
      <td><input type="text" class="form-control" size="16" value="<?php $gtt=Session::get('faciF'); echo $gtt; ?>" id="g1"  name="faciF" disabled/></td>
      <td><input type="text" class="form-control" size="16" value="<?php $gtt1=Session::get('done'); echo $gtt1; ?>" id="g1"  name="semiF" disabled/></td>
      <td><input type="text" class="form-control" size="16" value="<?php  echo Session::get('faciF')+Session::get('done'); ?>" id="g1"  name="totalF" disabled/>
      </td>
      @else
      <td><input type="text" class="form-control" size="16" value="" id="g1"  name=""/></td>
      <td><input type="text" class="form-control" size="16" id="g2" value=""/></td>
      <td><input type="text" class="form-control" size="16" value="" id="g1"  name=""/></td>
      <td><input type="text" class="form-control" size="16" id="g2" value=""/></td>
      <td><input type="text" class="form-control" size="16" value="" id="g1"  name=""/></td>

      @endif

    </tr>

  </tbody>
</table>
</form>
<form  action="all_submit" method="post">
  {{ csrf_field() }}

    <input align="left" type="text"   placeholder="Generate addmsiiion no:" name="genadd" value="<?php echo $last; ?>" hidden>

    <input align="left" type="text"   placeholder="Generate addmsiiion no:" name="aye" value="<?php echo $ayear; ?>" hidden>

    <input align="left" type="text"   placeholder="Generate addmsiiion no:" name="asemi" value="<?php echo $asemi; ?>" hidden>

    <select   name="grade" id="grade" hidden>
      @foreach($value as $red)
      @if(Session::get('grade') == $red->class)
        <option value='{{$red->class}}' selected>{{$red->class}}</option>
      @else
          <option value='{{$red->class}}'>{{$red->class}}</option>
      @endif
      @endforeach
    </select>
    <input type="text"  size="16" value="<?php $gtt=Session::get('cstudent'); echo $gtt; ?>" name="cstudent" hidden/>
    <input type="text"  size="16" value="<?php $gtt=Session::get('tstudent'); echo $gtt; ?>" name="capa" hidden/>
    <input type="text"  size="16" value="<?php $gtt=Session::get('facility'); echo $gtt; ?>" id="g1"  name="faciF" hidden/>
    <input type="text"  size="16" value="<?php $gtt1=Session::get('done'); echo $gtt1; ?>" id="g1"  name="semiF" hidden/>
    <input type="text"  size="16" value="<?php  echo Session::get('facility')+Session::get('done'); ?>" id="g1"  name="totalF" hidden/>

<div class="form-group col-md-12">
<input type="submit" name="" class="btn btn-info" value="Register">
</div>
</form>
@endsection
