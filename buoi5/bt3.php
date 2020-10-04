<?php 
include('./nhapdonhang.php');
if(isset($_POST['ten_file']) && isset($_POST['ten_hang']) && isset($_POST['so_luong'])  && isset($_POST['don_gia'])){
    $hang_new= new hang($_POST['ten_hang'],$_POST['so_luong'],$_POST['don_gia']);
     $hang_new->luu_hang();

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
</head>
<body>
    <div class="container">
        <form action="" method="POST" role="form">
            <legend>Form title</legend>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <label for="">Tên file</label>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="ten_file" id="input" class="form-control" value=""  required="required" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <label for="">tên Hàng</label>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                <input type="text" name="ten_hang" id="input" class="form-control" value=""  required="required" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <label for="">số lượng</label>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                <input type="text" name="so_luong" id="input" class="form-control" value=""  required="required" >
                </div>
            </div> <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <label for="">đơn giá</label>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                <input type="text" name="don_gia" id="input" class="form-control" value=""  required="required" >
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <div class="hien_thi">
        <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Tên hàng</th>
                <th>Số Lương</th>
                <th>Đơn giá</th>
                <th>Thành Tiền</th>
            </tr>
        </thead>
        <thead>
        <?php
        if(file_exists($_POST['ten_file'])){
        $f = fopen($_POST['ten_file'],"a+") or exit ("Không thể mở file!");
        while(!feof($f)){
           $dong=fgets($f);
            if($dong){
                $thong_tin_sach=new hang();
                $thong_tin_sach->chuyen_dong_thanh_thong_tin($dong);
                $thong_tin_sach->in_dong_sach();
            }
            }
        }
        ?>
            </thead>
        </table> 
        </div>
    </div>
</body>
</html>