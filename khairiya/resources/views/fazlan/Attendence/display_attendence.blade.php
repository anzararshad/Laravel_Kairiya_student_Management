@extends('fazlan.staff')
@section('section')

<div class="col-md-12 view_det">
  <div class="heading" style="padding: 0px; color: rgb(103, 103, 103); font-family: f23;">
    <label for=""><h2 class="h2">Staff Attendence Recorder</h2></label>
  </div>

  <div class="row">
      <div style="font-style:bold;font-size:3em;text-align:center;font-family:Microsoft JhengHei Light;">
        <?php echo(date("D M j"));?></div>
      </div>
      <div style="font-style:bold;font-size:6em;text-align:center;font-family:Microsoft JhengHei Light;">
        <?php echo(date("h:i a "));?></div>
      </div>

  </div>

  <div style="padding-top:10px">
      <table class="table table-bordered">
        <tr>
          <th>No</th>
          <th>Reg No</th>
          <th>Name</th>
          <th>status</th>
        </tr>

         <tr>
          <td>01</td>
          <td>038</td>
          <td>staffNAME</td>
          <td>Acadmc/Non-acadmc</td>
          <td>se/Ju/intrn</td>
          <td>
              <button type="button" class="btn btn-success col-md-5" name="in" <?php if(isset($_GET['out'])){echo "disabled=true";}?> >In</button>
              <button type="button" class="btn btn-danger col-md-5" name="out" style="margin-left:10px;">out</button>
          </td>
         </tr>

      </table>
  </div>




</div>
@endsection
