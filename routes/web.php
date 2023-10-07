<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/exam', function ()  {
    return view('Users/exam');
});

Route::get('/list/exam', function ()  {
    return view('Users/listExam');
});

Route::get('Admin/create/exam', function ()  {
    return view('Admin/list');
});
Route::get('Admin/list/courses', function ()  {
    return view('Admin/listcoursesmanager');
});
Route::get('Admin/courses/create', function ()  {
    return view('Admin/createcourses');
});
Route::get('/list/courses', function ()  {
    return view('Users/listcourses');
});



