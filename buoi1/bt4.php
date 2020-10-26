<?php 
$tong=0;
$so_nho_nhat='';
$so_lon_nhat='';
$mang_phan_tu='';
$mang_phat_sinh=array();
if(isset($_POST["so_phan_tu"])){
 if($_POST["so_phan_tu"]>0){
    for($i=0; $i<$_POST["so_phan_tu"];$i++){
        $phat_sinh=rand(1,100);
        $mang_phat_sinh[]=$phat_sinh;

        if($so_lon_nhat<$phat_sinh){
            $so_lon_nhat=$phat_sinh;
        }
        if($i==0){
            $so_nho_nhat=$phat_sinh;
        }
        $tong += $phat_sinh;
    }


 }
 $mang_phan_tu = implode(' ', $mang_phat_sinh);
}


?>   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
    <title>Document</title>
</head>
<body>
<div class="container">
    <form action="" method="post" class="horizontal" role="form">
    <div class="form-group">
             <legend>Phát sinh mảng và tính toán </legend>
     </div>
     <div class="form-group">
<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
   <label>Nhập số phần tử</label>  
    </div>

    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
    
    <input type="text" name="so_phan_tu" id="input" class="form-control" value=" " min=""} max="" step="" required="required" title="">
    </div>
</div>
<div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <button type="submit" class="btn btn-primary" value="Submit">Submit</button>
                </div>
<div class="form-group">
<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
   <label>Mảng</label>  
    </div>

    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
    
    <input type="text" name="" id="input" class="form-control" value="<?php echo $mang_phan_tu?> " min=""} max="" step="" required="required" title="">
    </div>
</div>
<div class="form-group">
<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
   <label>GTLN(max)</label>  
    </div>

    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
    
    <input type="text" name="" id="input" class="form-control" value="<?php echo $so_lon_nhat?> " min=""} max="" step="" required="required" title="">
    </div>
</div>
<div class="form-group">
<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
   <label>GTNN(min)</label>  
    </div>

    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
    
    <input type="text" name="" id="input" class="form-control" value="<?php echo $so_nho_nhat?> " min=""} max="" step="" required="required" title="">
    </div>
</div>
<div class="form-group">
<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
   <label>Tổng Mảng</label>  
    </div>

    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
    
    <input type="text" name="" id="input" class="form-control" value="<?php echo $tong?> " min=""} max="" step="" required="required" title="">
    </div>
</div>

  


</form>
</div>
</body>
</html>