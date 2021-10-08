<?php
if (!empty($_POST)) {
    if (isset($_POST['submit'])) {
        if (isset($_POST['hoten'])) {
            $hoten = $_POST['hoten'];
            $hoten = str_replace('"', '\\"', $hoten);
        }
        if (isset($_POST['tendangnhap'])) {
            $tendangnhap = $_POST['tendangnhap'];
            $tendangnhap = str_replace('"', '\\"', $tendangnhap);
        }
        if (isset($_POST['tenkhoa'])) {
            $tenkhoa = $_POST['tenkhoa'];
            $tenkhoa = str_replace('"', '\\"', $tenkhoa);
        }
        if (isset($_POST['ngaysinh'])) {
            $ngaysinh = $_POST['ngaysinh'];
            $ngaysinh = str_replace('"', '\\"', $ngaysinh);
        }
        if (isset($_POST['gioitinh'])) {
            $gioitinh = $_POST['gioitinh'];
        }
        if (!empty($hoten) && !empty($tendangnhap) && !empty($tenkhoa)
            && !empty($ngaysinh) && !empty($gioitinh)
        ) {
            //$created_at = $update_at = date('Y-m-d H:s:i');
            //Luu vao database
            $sql = "INSERT INTO bacsi (ID_Taikhoan,ID_Khoa,Hoten,Ngaysinh,Gioitinh)
                    values('$tendangnhap','$tenkhoa','$hoten','$ngaysinh','$gioitinh')";
                //$sql="UPDATE category set name='$name',update_At='$update_at'
                //where id=".$id;
            //}
            $s->execute($sql);


        }
    }
}
?>
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
                <form method="post">
                    <div class="form-group">
                        <label>Họ tên:</label>
                        <input type="text" class="form-control" name="hoten" placeholder="Enter Họ tên" required>
                    </div>
                    <div class="form-group">
                        <label>Tên tài khoản:</label>
                        <select class="form-control" name="tendangnhap" >
                            <?php
                            $sql1 = 'SELECT ID_Taikhoan,Tendangnhap FROM taikhoan where Phanquyen="Doctor"';
                            $caterogyList1 = $s->executeLesult($sql1);
                            foreach ($caterogyList1 as $item1) {
                                echo '<option value="' . $item1['ID_Taikhoan'] . '" >' . $item1['Tendangnhap'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tên Khoa: </label>
                        <select class="form-control" name="tenkhoa" id="cars" placeholder="chon khoa">
                            <?php
                            $sql = 'SELECT ID_Khoa,Tenkhoa FROM khoa';
                            $caterogyList = $s->executeLesult($sql);
                            foreach ($caterogyList as $item) {
                                echo '<option value="' . $item['ID_Khoa'] . '" >' . $item['Tenkhoa'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Ngày sinh:</label>
                        <input type="date" class="form-control" name="ngaysinh" required>
                    </div>
                    <div class="form-group">
                        <label>Giới tính:</label>
                        <input type="radio" value="nam" name="gioitinh"><label for="">Nam</label>
                        <input type="radio" value="nu" name="gioitinh"><label for="">Nữ</label>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Update</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                </form>
            </div>
            <!-- Modal footer -->
        </div>
    </div>
</div>