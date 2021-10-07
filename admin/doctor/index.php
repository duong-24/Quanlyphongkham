<div class="container-fluid">
    <div class="panel-heading mt-3 ml-3 mr-3">
        <h1 class="text-center">Xem danh sách bác sĩ</h1>
    </div>
    <div class="panel-body card">
        <div>
            <button class="btn btn-primary btn btn-sm" style="width:150px;margin:5px;float:left;" 
            data-toggle="modal" data-target="#myModal" type="button" id="new_appointment">
            Thêm Bác sĩ
            </button>
            <form method="post" style="width:150px;margin:5px;float:right;">
                        <div class="form-group">
                        <input type="text" class="form-control" placeholder="Searching..." id="s" name="s"
                        style="width:200px; float:right;">
                        </div>
            </form>
        </div>
    <div>
    <table class="card-body table table-bordered table-hover">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Họ và tên</th>
                    <th>Chuyên khoa</th>
                    <th>Tên tài khoản</th>
                    <th>Mật khẩu</th>
                    <th>Cấp phát quyền</th>
                    <th style="width:50px"></th>
                    <th style="width:50px"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                //timkiem
                $s='';
                    if(isset($_POST['s'])){
                        $s=$_POST['s'];
                    }
                    $additional='';
                    if(!empty($s)){
                        $additional=' and b.Hoten like"%'.$s.'%"';
                    }
                ////lay danh sach
                $s = new data();
                $sql = 'SELECT b.Hoten,b.ID_Khoa,ID_Bacsi,b.Tendangnhap
                            ,Tenkhoa,b.Matkhau FROM bacsi b join khoa k on b.ID_Khoa=k.ID_Khoa where 1 '.$additional.'';
                $caterogyList = $s->executeLesult($sql);
                foreach ($caterogyList as $item) {
                    echo '<tr>
                                <td>' . ($item['ID_Bacsi']) . '</td>
                                <td>' . $item['Hoten'] . '</td>
                                <td>' . $item['Tenkhoa'] . '</td>
                                <td>' . $item['Tendangnhap'] . '</td>
                                <td>' . $item['Matkhau'] . '</td>
                                <td><button class="btn btn-primary">Capquyen</button></td>
                                <td>
                                <button class="btn btn-warning">Xóa</button>
                                </td>
                                <td>
                                <button class="btn btn-success" data-toggle="modal" data-target="#myModal1">Sửa</button>
                                </td>
                                ';
                };
                ?>
            </tbody>
        </table>
    </div>
</div>
<!-- Them doctor -->
<?php 
    include './doctor/them.php';
    include './doctor/sua.php';
?>
<!-- Table Panel -->
</div>
