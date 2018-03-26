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
      <td align="center">{{ $record ->total}}</td>
    </tr>
  @endforeach
</tbody>
</div>

<div class="row">

   <a href="updFee" type="submit" class="btn btn-danger">UpdateFee </a>

</div>

@endsection
