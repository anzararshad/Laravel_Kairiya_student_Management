@extends('arshad.student')
@section('section')
@include('arshad.Fee.fee_btn')
<script type="text/javascript">
function sum() {
      var txtFirstNumberValue = document.getElementById('g1').value;
      var txtSecondNumberValue = document.getElementById('g2').value;
      var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('g3').value = result;
      }

}
function sum1() {
      var txtFirstNumberValue = document.getElementById('g4').value;
      var txtSecondNumberValue = document.getElementById('g5').value;
      var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('g6').value = result;

      }

}
function sum2() {
      var txtFirstNumberValue = document.getElementById('g7').value;
      var txtSecondNumberValue = document.getElementById('g8').value;
      var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('g9').value = result;
      }

}
function sum3() {
      var txtFirstNumberValue = document.getElementById('g10').value;
      var txtSecondNumberValue = document.getElementById('g11').value;
      var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('g12').value = result;
      }

}
function sum4() {
      var txtFirstNumberValue = document.getElementById('g13').value;
      var txtSecondNumberValue = document.getElementById('g14').value;
      var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('g15').value = result;
      }

}
function sum5() {
      var txtFirstNumberValue = document.getElementById('g16').value;
      var txtSecondNumberValue = document.getElementById('g17').value;
      var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('g18').value = result;
      }

}
function sum6() {
      var txtFirstNumberValue = document.getElementById('g19').value;
      var txtSecondNumberValue = document.getElementById('g20').value;
      var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('g21').value = result;
      }

}
function sum7() {
      var txtFirstNumberValue = document.getElementById('g22').value;
      var txtSecondNumberValue = document.getElementById('g23').value;
      var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('g24').value = result;
      }

}
function sum8() {
      var txtFirstNumberValue = document.getElementById('g25').value;
      var txtSecondNumberValue = document.getElementById('g26').value;
      var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('g27').value = result;
      }

}
function sum9() {
      var txtFirstNumberValue = document.getElementById('g28').value;
      var txtSecondNumberValue = document.getElementById('g29').value;
      var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('g30').value = result;
      }

}
function sum10() {
      var txtFirstNumberValue = document.getElementById('g31').value;
      var txtSecondNumberValue = document.getElementById('g32').value;
      var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('g33').value = result;
      }

}
function sum11() {
      var txtFirstNumberValue = document.getElementById('g34').value;
      var txtSecondNumberValue = document.getElementById('g35').value;
      var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('g36').value = result;
      }

}

</script>


@if($mes =Session::get('suc'))
<div class="alert alert-sccess col-md-12 ">
    <strong>{{ $mes }}</strong>
</div>
@endif
<form action="input_fees_detais" method="post" id="">
<br><br>
<div class="form-group col-md-6">
  <br><br>

  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <label for="">Semester Commence Date:</label>
  <input type="date"  class="form-control" placeholder="Add academic year" name="A_year" value="" required>
<br>
</div>
<div class="form-group col-md-6">
  <br><br>

  <label for="">Academic Semester:</label>
<select  class="form-control" name="Semi">
  <option>Semester 1</option>
  <option>Semester 2</option>
  <option>Semester 3</option>
</select>

<hr style="visibility: hidden;">
</div>

  <label for=""><h3><u>Update Academic Fees details</u></h3></label>


<div >
<table  class="table table-bordered">

  <thead class="thead-inverse">
    <tr>
      <th>Grade</th>
      <th>Fees</th>
      <th>Exam Fees</th>
      <th>Total fees</th>
    </tr>
  </thead>
  <tbody>

    <tr>
      <td><input type="text"  class="form-control" name="one" value="1" ></td>
      <td><input type="text" class="form-control" size="16" id="g1" onkeyup="sum();" name="fees1" required/></td>
      <td><input type="text" class="form-control" size="16" id="g2" onkeyup="sum();" name="exam1" required/></td>
      <td><input class="form-control"  id="g3" name="total1" required /></td>
    </tr>
    <tr>
      <td><input type="text" class="form-control" name="two" value="2" ></td>
      <td><input type="text" class="form-control" size="16" id="g4" onkeyup="sum1();" name="fees2" required/></td>
      <td><input type="text" class="form-control" size="16" id="g5" onkeyup="sum1();" name="exam2" required/></td>
      <td><input type="text" class="form-control" id="g6" name="total2" required/></td>
    </tr><tr>
      <td><input type="text" class="form-control" name="three" value="3" ></td>
      <td><input type="text" class="form-control" size="16" id="g7" onkeyup="sum2();" required/></td>
      <td><input type="text" class="form-control" size="16" id="g8" onkeyup="sum2();"  required/></td>
      <td><input class="form-control"  id="g9" name='total3'  required/></td>
    </tr><tr>
      <td><input type="text" class="form-control" name="four" value="4" ></td>
      <td><input type="text" class="form-control" size="16" id="g10" onkeyup="sum3();" required/></td>
      <td><input type="text" class="form-control" size="16" id="g11" onkeyup="sum3();" required /></td>
      <td><input class="form-control"  id="g12" name='total4'  required/></td>
    </tr><tr>
      <td><input type="text" class="form-control" name="five" value="5" ></td>
      <td><input type="text" class="form-control" size="16" id="g13" onkeyup="sum4();" required/></td>
      <td><input type="text" class="form-control" size="16" id="g14" onkeyup="sum4();" required/></td>
      <td><input class="form-control"  id="g15" name='total5'  required/></td>
    </tr><tr>
      <td><input type="text" class="form-control" name="six" value="6" ></td>
      <td><input type="text" class="form-control" size="16" id="g16" onkeyup="sum5();" required/></td>
      <td><input type="text" class="form-control" size="16" id="g17" onkeyup="sum5();" required/></td>
      <td><input class="form-control"  id="g18" name='total6'  required/></td>
    </tr><tr>
      <td><input type="text" class="form-control" name="seven" value="7" ></td>
      <td><input type="text" class="form-control" size="16" id="g19" onkeyup="sum6();" required/></td>
      <td><input type="text" class="form-control" size="16" id="g20" onkeyup="sum6();" required/></td>
      <td><input class="form-control"  id="g21" name='total7'  required/></td>
    </tr><tr>
      <td><input type="text" class="form-control" name="eight" value="8" ></td>
      <td><input type="text" class="form-control" size="16" id="g22" onkeyup="sum7();" required/></td>
      <td><input type="text" class="form-control" size="16" id="g23" onkeyup="sum7();" required/></td>
      <td><input class="form-control"  id="g24" name='total8'  required/></td>
    </tr><tr>
      <td><input type="text" class="form-control" name="nine" value="9" ></td>
      <td><input type="text" class="form-control" size="16" id="g25" onkeyup="sum8();" required/></td>
      <td><input type="text" class="form-control" size="16" id="g26" onkeyup="sum8();" required/></td>
      <td><input class="form-control"  id="g27" name='total9' required /></td>
    </tr><tr>
      <td><input type="text" class="form-control" name="ten" value="10" ></td>
      <td><input type="text" class="form-control" size="16" id="g28" onkeyup="sum9();" required/></td>
      <td><input type="text" class="form-control" size="16" id="g29" onkeyup="sum9();" required/></td>
      <td><input class="form-control"  id="g30" name='total10'  required/></td>
    </tr><tr>
      <td><input type="text" class="form-control" name="eleven" value="11" ></td>
      <td><input type="text" class="form-control" size="16" id="g31" onkeyup="sum10();" required/></td>
      <td><input type="text" class="form-control" size="16" id="g32" onkeyup="sum10();" required/></td>
      <td><input class="form-control"  id="g33" name='total11' required /></td>
    </tr>
    <tr>
      <td><input type="text" class="form-control" name="twelve" value="12" ></td>
      <td><input type="text" class="form-control" size="16" id="g34" onkeyup="sum11(); required"/></td>
      <td><input type="text" class="form-control" size="16" id="g35" onkeyup="sum11(); required"/></td>
      <td><input class="form-control"  id="g36" name='total12' required/></td>
    </tr>
  </tbody>
</table>
<hr style="visibility: hidden;">
</div>
<div class="form-group col-md-6">
  <label for="">Fine Added if a due day passed:</label>
  <input type="text"  class="form-control" placeholder="fine money" name="fine" value="">

</div>
<div class="form-group col-md-6">
  <label for="">Last Day Of payment:</label>
  <input type="date"  class="form-control" placeholder="Add academic year" name="Ldate" value="">
<br>
</div>
<div class="form-group col-md-6">
  <label for="">Extension Period With fine(days):</label>
  <input type="text"  class="form-control" placeholder="days of extension with fine" name="extension" value="">

</div>
<div class="form-group col-md-6">
  <label for="">Wat percentage:</label>
  <input type="text"  class="form-control" placeholder="Wat details" name="wat" value="">

</div>
<div class="form-group col-md-6">
  <label for="">facility Fees:</label>
  <input type="text"  class="form-control" placeholder="facility fee for this semester" name="faci" value="">
</div>

<div class="form-group col-md-6">
  <hr style="visibility: hidden;">
</div>

<div class="form-group col-md-6" >
  <input type="submit" name="" class="btn btn-success" value="Submit">
    </div>
</form>

@endsection
