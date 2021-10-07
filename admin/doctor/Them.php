<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Thêm Bác sĩ</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form action="#" method="post">
                    <div class="form-group">
                        <label >Họ tên:</label>
                        <input type="text" class="form-control" name="hoten" placeholder="Enter Họ tên" required>
                    </div>
                    <div class="form-group">
                        <label>Tên đăng nhập:</label>
                        <input type="text" class="form-control" name="tendangnhap" placeholder="Enter Tên đăng nhập" required>
                    </div>
                    <div class="form-group">
                        <label>Mật khẩu:</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter mật khẩu" required>
                    </div>
                    <div class="form-group">
                        <label>Nhập lại mật khẩu:</label>
                        <input type="password" class="form-control" name="nlpassword" placeholder="Nhập lại mật khẩu" required>
                    </div>
                    <div class="form-group">
                        <label>Ngày sinh:</label>
                        <input type="date" class="form-control" name="ngaysinh" required>
                    </div>
                    <div class="form-group">
                        <label>Giới tính:</label>
                        <input type="radio" value="nam" name="gioitinh"><label for="">Nam</label>
                        <input type="radio" value="nu" name="gioitinh" ><label for="">Nữ</label>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Update</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                   
                </form>
            </div>
            <!-- Modal footer -->
        </div>
    </div>
</div>