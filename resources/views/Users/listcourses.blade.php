@php use App\View\Components\CourseComponent; @endphp
@extends("layouts/head")
<link rel="stylesheet" href={{asset("css/user/listcourses.css")}} />

<div class="row">
    <div class="col-2" style="padding: 0">
        @include('dasboard.user.menu')
    </div>
    <div class="col-10" style="padding: 0">
        <x-navbar title="Danh sách khoá học"></x-navbar>
        <div class="container" style="padding: 0; margin-top: 20px">
            <div class="list-courses d-flex flex-wrap">
                <x-course-component src="assets/danhgialangluc.png" titleCourses="Thi thử đánh giá năng lực"/>
                <x-course-component src="assets/danhgialangluc.png" titleCourses="Thi thử đánh giá năng lực"/>
                <x-course-component src="assets/danhgialangluc.png" titleCourses="Thi thử đánh giá năng lực"/>
            </div>
        </div>
    </div>
</div>
@extends("layouts/footer")

