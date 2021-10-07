<?php
    require_once('../../db/dbhelp.php');
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $sql='SELECT * FROM bacsi where id_doctor='.$id;
        $caterogyList=executeSingLesult($sql);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Bác Sĩ</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <center><h1>Thông tin bác sĩ</h1></center>
            </div>
            <div class="panel-body">
                <div class="row">
                    <?php 
                            echo '
                                <div class="col-lg-6">
                                <img src="'.$caterogyList['image'].'" alt="" style="width:200px;height:200px;"><br>
                                <label for="">Họ tên: <b>'.$caterogyList['fullname'].'</b></label><br>
                                <label for="">Giới tính: <b>'.$caterogyList['gioitinh'].'</b></label><br>
                            </div>
                                <div class="col-lg-6">
                                <label for="">Tài khoản: <b>'.$caterogyList['username'].'</b></label> <br>
                                <label for="">Địa chỉ: <b>'.$caterogyList['address'].'</b></label><br>
                                <label for="">Số điện thoại: <b>'.$caterogyList['sdt'].'</b></label><br>
                                <label for="">Email: <b>'.$caterogyList['email'].'</b></label><br>
                                <label for="">Nơi làm việc: <b>'.$caterogyList['working_address'].'</b></label>
                            </div>
                            ';
                    ?>
                </div>
            </div>

        </div>
    </div>
</body>
</html>