@extends('fazlan.staff')
@section('section')

<div class="col-md-3 view_det">
  <div class="heading" style="padding: 0px; color: rgb(103, 103, 103); font-family: f23;">
    <label for=""><h2 class="h2">Search staff</h2></label>
  </div>
</div>

<div class="form-group col-md-4">
    <div style="margin:20px 0px 0px -20px">
      <input type="text" class="form-control" placeholder="Search By Name..." name="" value="">
   </div>
</div>

<div class="form-group col-md-3">
            <table style="margin:15px 0px 0px 10px">
            <tr><td><label><h4>Filter By :</label></h4></td>
                <td style="padding-left:10px">
                    <select class="form-control input-md" id="">
                        <option>Type</option>
                        <option>Academic</option>
                        <option>Non-Academic</option>
            </select></td>
        </tr>
    </table>
</div>

<div class="from-group col-md-2">
            <table style="margin:20px 0px 0px -20px;">
            <tr>
                <td style="padding-left:10px">
                    <select class="form-control input-md" style="width:150%" id="">
                        <option>Postion</option>
                        <option>intern</option>
                        <option>junior</option>
                        <option>senior</option>
            </select></td>
        </tr>
    </table>
</div>

<hr>

<div style="padding-top:10px">
    <table class="table table-bordered">
      <tr>
        <th>No</th>
        <th>Reg No</th>
        <th>Name</th>
        <th>Type</th>
        <th>Position</th>
      </tr>

       <tr>
        <td>01</td>
        <td>038</td>
        <td>staffNAME</td>
        <td>Acadmc/Non-acadmc</td>
        <td>se/Ju/intrn</td>
        <td>
          <a href="/staff_Details"><button type="button" class="btn btn-success" name="button">View Details</button></a>
        </td>
       </tr>

    </table>
</div>



@endsection
