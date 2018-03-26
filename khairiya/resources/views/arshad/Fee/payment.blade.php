@extends('arshad.student')
@section('section')
@include('arshad.Fee.fee_btn')
<?php

$addno=Session::get('Addmission');
$con=\DB::table('student')->select('fullname','currentGrade')
                           ->where('Addmission_no',$addno)
                           ->get();
      foreach ($con as $value) {
            $name=$value->fullname;
            $cgrade=$value->currentGrade;
      }

      $getyear= \DB::table('feesdetails')->select('academic_year','Semi')
                                    ->orderby('id','desc')
                                    ->limit(1)
                                    ->get();
                                    foreach($getyear as $year){
                                         $ayear =$year->academic_year;
                                         $asemi = $year->Semi;
                                       }
$count = DB::table('feesdetails')->select('Ldate')
                                ->whereDate('Ldate','>',date('Y-m-d'))
                                ->count();//count
$semitot=0;
                  $totalsemiFee=\DB::table('feesd')->select('total')
                                           ->where('Grade',$cgrade)
                                            ->get();
                                            foreach($totalsemiFee as $tot){
                                                 $semitot =$tot->total;
                               }

$days = \DB::table('feesdetails')->select('Ldate','extension','wat','fine')
                         ->orderby('id','desc')
                         ->limit(1)
                         ->get();
                         foreach($days as $m){
                              $Ldate=$m->Ldate;
                              $extension= $m->extension;
                              $wati=$m->wat;
                              $fin=$m->fine;
                          }
                        //  if($count==0){
                         $to = \Carbon\Carbon::createFromFormat('Y-m-d',DATE($Ldate));
                         $from = \Carbon\Carbon::createFromFormat('Y-m-d',date('Y-m-d'));
                         $diff_in_days = $to->diffInDays($from);
                         $totalFine=$diff_in_days*$fin;
                         $Total=$totalFine + $semitot +($semitot*$wati)/100;
                      //  }
                      //  else {
                      //    $totalFine=0;
                      //    $Total=$totalFine + $semitot +($semitot*$wati)/100;
                      //  }
                      // if($count==0){
                      //                              $to = \Carbon\Carbon::createFromFormat('Y-m-d',DATE($Ldate));
                      //                              $from = \Carbon\Carbon::createFromFormat('Y-m-d',date('Y-m-d'));
                      //                              $diff_in_days = $to->diffInDays($from);
                      //                              $totalFine=$diff_in_days*$fin;
                      //                              $Total=$totalFine + $semitot +$semitot*$wati/100;
                      // }
                      // else {
                      //          $totalFine=0;
                      //          $Total=$totalFine+$semitot+($semitot*$wati)/100;
                      // }


 ?>

 <form class="" action="getDetails" method="post" id="bish">
    {{ csrf_field() }}
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <!-- <script type="text/javascript">
    $(document).ready(function(){
        $('#bish').submit();
  });
    </script> -->
<table  class="table table-bordered">
  <thead class="thead-inverse">
    <tr>
      <th>Addmission No:</th>
      <th>Name</th>
      <th>Grade:</th>
      <th>academic_year:</th>
      <th>Semester:</th>
      <th>Fine</th>
      <th>Total semester Fee:</th>
      <th>Submit:</th>

</tr>
  </thead>
  <tbody>
    <tr>

      <td>
        <input type="text" class="form-control"  size="16" value="<?php echo $addno ?>" name="addno"/></td>
<!-- </form> -->
      <td><input type="text" class="form-control" size="16" value="<?php echo $name ?>" name="name"/></td>
      <td><input type="text" class="form-control" size="16" value="<?php echo $cgrade ?>" name="cgrade"/></td>
      <td><input type="text" class="form-control" size="16" value="<?php echo $ayear ?>"  name="ayear"/></td>
      <td><input type="text" class="form-control" size="16" value="<?php echo $asemi ?>"  name="asemi"/></td>
      <td><input type="text" class="form-control" size="16" value="<?php echo $totalFine ?>"   name="totalf"/>
      </td>
      <td><input type="text" class="form-control" size="16" value="<?php echo $Total ?>"  name="total"/></td>
      <td><input type="submit" class="btn btn-success" size="16" value="submit"   name=""/></td>

    </tr>

  </tbody>
</table>
</form>
@endsection
