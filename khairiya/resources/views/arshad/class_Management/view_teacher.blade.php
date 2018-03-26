@extends('arshad.student')
<br>
@section('section')
<br>
@include('arshad.class_Management.class_topbtn')

<script type="text/javascript">
  $(document).ready(function(){
    $('#asd').on('click',function(){

      $('#bish').submit();

    });
});
  </script>

<?php
  $notify= \DB::table('classmanage')->get();

?>
<br><br><br>
  <div class="view_member">
    <form class="" action="change_teach" method="post" id="bish">

     <input type="hidden" name="_token" value="{{ csrf_token() }}">

<table  class="table table-bordered">

  <thead class="thead-inverse">
    <tr>
      <th>Class</th>

      <th>Teacher Name</th>
      <th>Class Monitor</th>
      <th>modification</th>
    </tr>
  </thead>
  <tbody>

    @foreach($notify as $record)

  <tr>
      <td scope="row"><input type="text" class="form-control" name="class" value="{{ $record ->class}}"></p></td>
        <td align="center"><input type="text" class="form-control" name="teacher" value="{{ $record ->class_teacher}}"></td>
        <td align="center"><input type="text" class="form-control" name="monitor" value="{{ $record ->monitor}}"></td>
      <td align="center"><a href="change?{{$record->id}}" class="btn btn-info" id="asd" >Change Teacher</a></td>
    </tr>

      @endforeach
</table>
  </div>

@endsection
