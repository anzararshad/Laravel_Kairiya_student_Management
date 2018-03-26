@extends('arshad.student')
@section('section')
@include('arshad.class_Management.class_topbtn')
<form action="expand" id="expand" method="post">
  {{ csrf_field() }}
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="view_member">
<table  class="table table-bordered">
<caption><label for=""><h2 class="h2"><u>Add Class</u></h2></label></caption>
<thead class="thead-inverse">
  <tr>
    <th>Class</th>
    <th>division</th>
    <th>Capacity</th>
    <th>Option</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td align="center"><input type="text"  class="form-control" placeholder="Grade" name="grade" value=""></td>
      <td align="center"><input type="text"  class="form-control" placeholder="Add Deviosion" name="div" value=""></td>
      <td align="center"><input type="text"  class="form-control" placeholder="total capacity of class" name="cap" value=""></td>
      <td align="center"><input type="submit"  class="btn btn-success" name="" onsubmit="document.getElementById('expand').submit();" value="create&expand"></td>
  </tr>
</div>
</table>
</form>
<form class="" action="monitor" id="monitor" method="post">
  {{ csrf_field() }}
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="view_member">
  <table  class="table table-bordered">

  <caption><label for=""><h2 class="h2"><u>Assign Monitors</u></h2></label></caption>
  <thead class="thead-inverse">
    <tr>
      <th>Class</th>
      <th>Addmission No:</th>
      <th>Option</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <td align="center"><input type="text"  class="form-control" placeholder="class" name="cls" value=""></td>
        <td align="center"><input type="text"  class="form-control" placeholder="Addmission No:" name="add" value=""></td>
      <td align="center"><input type="submit"  class="btn btn-success" onsubmit="document.getElementById('monitor').submit();" value="update"></td>
    </tr>
  </div>

</form>




@endsection
