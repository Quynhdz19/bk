@php use App\View\Components\CourseComponent; @endphp
@extends("layouts/head")
<link rel="stylesheet" href={{asset("css/user/listcourses.css")}} />
<div class="container">
    <div class="list-courses d-flex">
        <x-course-component src="assets/danhgialangluc.png" titleCourses="Thi thử đánh giá năng lực" />
    </div>
</div>
