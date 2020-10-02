<?php 

if(isset($_POST['ma_sach']) && isset($_POST['ten_sach'])  && isset($_POST['don_gia'])  && isset($_POST['tac_gia'])  && isset($_POST['nha_xuat_ban'])  && isset($_POST['hinh']) ){
    $f = fopen('ds_sach.txt', "a+") or exit ("Không thể mở file!");
    while(!feof($f)){
             echo fgets($f) ;
            }
    $noidung= $_POST['ma_sach'].'||'.$_POST['ten_sach'].'||'.$_POST['don_gia'].'||'.$_POST['tac_gia'].'||'.$_POST['nha_xuat_ban'].'||' .$_POST['hinh'] .PHP_EOL; 
    fwrite($f,$noidung);   

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
                    <label for="">Mã Sách</label>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="ma_sach" id="input" class="form-control" value=""  required="required" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <label for="">Tên sách</label>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="ten_sach" id="input" class="form-control" value=""  required="required" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <label for="">Đơn giá</label>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="don_gia" id="input" class="form-control" value=""  required="required" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <label for="">Tác giả</label>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="tac_gia" id="input" class="form-control" value=""  required="required" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <label for="">Nhà Xuất Bản</label>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="nha_xuat_ban" id="input" class="form-control" value=""  required="required" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <label for="">Hình </label>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="hinh" id="input" class="form-control" value=""  required="required" >
                </div>
            </div>
    
            <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>   
</body>
</html>