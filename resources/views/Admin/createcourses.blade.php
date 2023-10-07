<link rel="stylesheet" href={{asset("css/bootstrap.min.css")}} />
<link rel="stylesheet" href={{asset("css/fontawesome/fontawesome.min.css")}} />
<link rel="stylesheet" href={{asset("css/fontawesome/all.min.css")}} />
<link rel="stylesheet" href={{asset("css/Admin/createcourses.css")}} />
<div class="container">
    <h3>Tạo khoá học</h3>
</div>
<div class="container"
      style="min-height: 400px;
      background: #f2f3f7;
      border-radius: 5px;
      border: 1px solid #dadada;
      padding-top: 10px" >
    <form class="row g-3">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tên khoá học</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nhập tên khoá học...">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Ghi chú</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Chọn import học sinh từ file excel</label>
            <input class="form-control" type="file" id="formFile">
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Tạo khoá học</button>
        </div>
    </form>
</div>
