<?php


////////////// arshad ////////////////////
Route::get('/student', function () {
    return view('arshad.student');

});
Route::get('/payment', function () {
    return view('arshad.Fee.payment');

});
Route::get('/add_new_devision', function () {
    return view('arshad.class_Management.add_new_devision');

});
Route::get('/gen_addmssion', function () {
    return view('arshad.student.gen_addmssion');

});
Route::get('/assign_classTeachers', function () {
    return view('arshad.class_Management.assign_classTeachers');

});
Route::get('/ViewFeeDetails', function () {
    return view('arshad.Fee.ViewFeeDetails');

});
Route::get('/student_display', function () {
    return view('arshad.student.student_display');

});
Route::get('/view_teacher', function () {
    return view('arshad.class_Management.view_teacher');

});
Route::get('/input_fees_detais', function () {
    return view('arshad.Fee.input_fees_detais');

});

Route::get('/after_fee', function () {
    return view('arshad.Fee.after_fee');

});
  Route::get('/view_h', function () {
    return view('arshad.student.student_dispaly');
});
Route::get('/update', function () {
  return view('arshad.student.UpdateStudent');
});

Route::post('/SaveFee', 'UpdateStudentCntrl@SaveFee');

Route::get('/GOFORREP', function () {
  return view('arshad.Fee.Report');
});
Route::get('/ReportSelecter', function () {
  return view('arshad.Fee.ReportSelecter');
});

Route::get('/repo', function () {
  return view('arshad.Fee.Repo');
});
Route::get('/updFee', function () {
  return view('arshad.Fee.UpdateFeeDetails');
});


//Route::get('/GOFORREP','paymentControl@report');

Route::post('/add_student', 'studentController@add_student');
Route::post('/UpdateStudent','UpdateStudentCntrl@UpdateStudentCntrl');

Route::post('/input_fees_detais', 'input_fees_detais_Control@input_fees_detais');
Route::post('/gen_addmssion', 'gen_addmssion_control@gen_addmssion');
//Route::post('/gen_addmssion', 'gen_addmssion_control@all_submit');
Route::get('/get_devision', 'gen_addmssion_control@get_devision');
Route::get('/record_delete', 'viewStudentC@record_delete');
Route::get('/change', 'viewTeacher@change');
Route::post('/all_submit', 'gen_addmssion_control@all_submit');
Route::post('/get_devision', 'gen_addmssion_control@get_devision');
Route::post('/change_teach', 'viewTeacherControl@change_teach');

Route::post('/monitor','divisionControl@monitor');
Route::get('/monitor','divisionControl@monitor');
Route::post('/expand', 'divisionControl@expand');
Route::post('/getDetails', 'paymentControl@getDetails');

Route::post('/pay_Fee', 'pay_Fee_control@pay_Fee');
Route::get('/', function()
{
    return View::make('view2');
});
Route::post('view2', 'gen_addmssion_control@get_devision');


Route::get('/add_student', function () {
    return view('arshad.student.add_student');
});


Route::get('/view_student', function () {
    return view('arshad.student.view_student');

});
Route::get('/pay_Fee', function () {
    return view('arshad.Fee.pay_Fee');

});
Route::get('/notification', function () {
    return view('arshad.Fee.view_late_payment');

});


//
Route::get('/', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/staff', function () {
    return view('fazlan.staff');
});
Route::get('/staff_Register', function () {
    return view('fazlan.staff_Register.staff_register');
});
Route::get('/staff_Details', function () {
    return view('fazlan.staff_details.staff_Details');
});
Route::get('/staff_Attendence', function () {
    return view('fazlan.Attendence.display_attendence');
});
Route::get('/staff_Search', function () {
    return view('fazlan.search_staff.staff_search');
});
Route::get('/library', function () {
    return view('izzath.library');
});
Route::get('/view_member', function () {
    return view('izzath.member.view_det');
});
Route::get('/add_member', function () {
    return view('izzath.member.add_member');
});
Route::get('/view_book', function () {
    return view('izzath.book.view_book');
});
Route::get('/add_book', function () {
    return view('izzath.book.add_book');
});
Route::get('/view_lend', function () {
    return view('izzath.lend.view_lend');
});
Route::get('/lend_book', function () {
    return view('izzath.lend.lend_book');
});

/////////// Controllers ////////////////////

Route::post('/save','dsafasController@functionname');


/////////////////////////////////////////

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/addstudent', function () {
    return view('arshad.book.add_student');
});
Route::get('/staff', function () {
    return view('fazlan.staff');
});
Route::get('/staff_Register', function () {
    return view('fazlan.staff_Register.staff_register');
});
Route::get('/staff_Details', function () {
    return view('fazlan.staff_details.staff_Details');
});
Route::get('/staff_Attendence', function () {
    return view('fazlan.Attendence.display_attendence');
});
Route::get('/staff_Search', function () {
    return view('fazlan.search_staff.staff_search');
});
Route::get('/library', function () {
    return view('izzath.library');
});
Route::get('/view_member', function () {
    return view('izzath.member.view_det');
});
Route::get('/add_member', function () {
    return view('izzath.member.add_member');
});
Route::get('/view_book', function () {
    return view('izzath.book.view_book');
});
Route::get('/add_book', function () {
    return view('izzath.book.add_book');
});
Route::get('/view_lend', function () {
    return view('izzath.lend.view_lend');
});
Route::get('/lend_book', function () {
    return view('izzath.lend.lend_book');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');
