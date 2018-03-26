@extends('arshad.student')
@section('section')
<br>
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
<div class="view_member">
  <?php


  $count = DB::table('feesdetails')->select('Ldate')
                                    ->whereDate('Ldate','>',date('Y-m-d'))
                                    ->count();

  $days = \DB::table('feesdetails')->select('Ldate','extension','academic_year')
                             ->orderby('id','desc')
                             ->limit(1)
                             ->get();

                             foreach($days as $m){
                                  $aye=$m->academic_year;
                                  $Ldate =$m->Ldate;
                                  $extension= $m->extension;
                             }
                             $year=$aye;

                             $to = \Carbon\Carbon::createFromFormat('Y-m-d',DATE($Ldate));
                             $from = \Carbon\Carbon::createFromFormat('Y-m-d',date('Y-m-d'));
                             $diff_in_days = $to->diffInDays($from);
  //$pay = \DB::table('fees')->select('Addmission no','fullname','currentGrade','division','number')->get();
  //$student=\DB::table('student')->select('Addmission_no')->get();

  $notify = DB::table("student")->select('Addmission_no','fullname','currentGrade','division','number')
            ->whereNOTIn('Addmission_no',function($query){

              $yes= \DB::table('feesdetails')->select('academic_year')
                                         ->orderby('id','desc')
                                         ->limit(1)
                                         ->get();

                                         foreach($yes as $m){
                                              $aye=$m->academic_year;
                                         }

               $query->select('Addmission_no')->from('fees')
                      ->where('ayear', '=',$aye);
            })
            ->get();


  //$result = $student->diff($pay);



                          //     Session::put('id',$o);
                          //   $time = strtotime($b);
                        //     $Yt =date("Y",$time);
                          //   $last = "KH-".$Yt."00".$o;




   ?>

<table  class="table table-bordered">

  <thead class="thead-inverse">
    <tr>
      <th>Addmission No</th>
      <th>fullname</th>
        <th>Grade</th>
        <th>Devision</th>
      <th>Contact No</th>
      <th>Days Delayed</th>
      <th>Option</th>
    </tr>
  </thead>
  <tbody class="searchable">


      <option></option>


@foreach($notify as $record)

    <tr>
      <td scope="row">{{ $record -> Addmission_no}}</td>
      <td align="center">{{ $record -> fullname}}</td>
        <td align="center">{{ $record -> currentGrade}}</td>
        <td align="center">{{ $record -> division}}</td>
        <td align="center">{{ $record -> number}}</td>
        <td align="center">{{$diff_in_days}}</td>
       <td align="center">

        <a href="/view_h?{{ $record -> Addmission_no}}"><input type="button" class="btn btn-success"  name="button"value="View Profile"></a>

      </td>
    </tr>

@endforeach

  </div>
</div>
@endsection
