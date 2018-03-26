@extends('arshad.student')
@section('section')
@include('arshad.Fee.fee_btn')

<script type="text/javascript">
$(document).ready(function () {

    (function ($) {

        $('#filter').keyup(function () {

            var rex = new RegExp($(this).val(), 'i');
            $('.searchable tr').hide();
            $('.searchable tr').filter(function () {
                return rex.test($(this).text());
            }).show();

        })

    }(jQuery));

});

</script>

    <div class="input-group"> <span class="input-group-addon">Student Admission No:</span>

    <input id="filter" type="text" class="form-control" placeholder="Student Search">
</div>
<div class="form-group col-md-12">
  <?php
    $notify= \DB::table('feesd')->get();

   $fullname ="bfhshb";
  ?>
  <form action="SaveFee" method="post">
    {{csrf_field()}}
<table  class="table table-bordered col-md-12">

  <thead class="thead-inverse">
    <tr>
      <th>Grade</th>
      <th>TotalFee</th>
    </tr>
  </thead>
  <tbody class="searchable ">

    @foreach($notify as $record)
    <tr>
      <td scope="row">{{ $record ->Grade}}</td>
      <td align="center"><input type="text" name="fee[]" value="{{ $record ->total}}"></td>
    </tr>

  @endforeach
</tbody>
</table>
<input type="submit" class="btn btn-info" name="" value="Save Update">
</form>
</div>

<div class="row">



</div>

@endsection
