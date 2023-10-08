<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;

//login
Route::get('/', function () {
    return view('welcome');
});

//admin
Route::get('Admin/create/exam', function ()  {
    return view('Admin/list');
});
Route::get('Admin/list/courses', function ()  {
    return view('Admin/listcoursesmanager');
});
Route::get('Admin/courses/create', function ()  {
    return view('Admin/createcourses');
});
Route::get('Admin/courses/menu', function ()  {
    return view('dasboard/menu');
});

//user
Route::get('Users/exam', function ()  {
    return view('Users/exam');
});

Route::get('Users/list/exam', function ()  {
    return view('Users/listExam');
});

Route::get('Users/list/courses', function ()  {
    return view('Users/listcourses');
});



