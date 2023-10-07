<link rel="stylesheet" href={{asset("css/bootstrap.min.css")}} />
<link rel="stylesheet" href={{asset("css/admin/list.css")}} />
<div class="container py-10" style="">

    <div>
        <form class="row g-3">
            <div class="col-md-4">
                <label for="validationDefault01" class="form-label">Tên bài làm</label>
                <input type="text" class="form-control" id="validationDefault01" value="Mark" required>
            </div>
            <div class="col-md-4">
                <label for="validationDefault02" class="form-label">Thời gian làm bài</label>
                <input type="text" class="form-control" id="validationDefault02" value="Otto" required>
            </div>
            <div class="col-md-4">
                <label for="validationDefaultUsername" class="form-label">Username</label>
                <div class="input-group">
                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                    <input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationDefault03" class="form-label">City</label>
                <input type="text" class="form-control" id="validationDefault03" required>
            </div>
            <div class="col-md-3">
                <label for="validationDefault04" class="form-label">State</label>
                <select class="form-select" id="validationDefault04" required>
                    <option selected disabled value="">Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="validationDefault05" class="form-label">Zip</label>
                <input type="text" class="form-control" id="validationDefault05" required>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Tạo bài kiểm tra</button>
            </div>
        </form>
    </div>

</div>
