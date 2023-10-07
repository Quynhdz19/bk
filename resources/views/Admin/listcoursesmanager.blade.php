@php use App\View\Components\CourseComponent; @endphp
@extends("layouts/head")
<link rel="stylesheet" href={{asset("css/Admin/list.css")}} />
<div class="container">
    <div class="list-courses d-flex flex-wrap">
        <div class="component">
            <div class="d-flex justify-content-center align-items-center" style="height: 160px">
                <i style="font-size: 50px" class="fas fa-plus"></i>
            </div>
            <h6 class="title-courses">Tạo khoá học</h6>
        </div>
        <x-course-component src="assets/danhgialangluc.png" titleCourses="Thi thử đánh giá năng lực" />
        <x-course-component src="assets/danhgialangluc.png" titleCourses="Thi thử đánh giá năng lực" />
        <x-course-component src="assets/danhgialangluc.png" titleCourses="Thi thử đánh giá năng lực" />
    </div>
</div>
