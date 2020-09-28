<?php 
$nam_can_chi='';
$mang_can=["Canh","Tân","Nhâm","Quý","Giáp","Ất","Bính","Đinh","Mậu","Kỷ"];
$mang_chi=["Thân","Dậu","Tuất","Hợi","Tý","Sửu","Dần","Mão","Thìn","Tỵ","Ngọ","Mùi"];
if(isset($_POST["nam_sinh"])){
  $index_can= $_POST["nam_sinh"] %10;
  $index_chi=$_POST["nam_sinh"]%12;
  $nam_can_chi=$mang_can[$index_can].' '.$mang_chi[$index_chi];

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
             <legend>Tách họ và tên </legend>
     </div>
     <div class="form-group">
<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
   <label>Năm</label>  
    </div>

    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
    
    <input type="text" name="nam_sinh" id="input" class="form-control" value=" " min=""} max="" step="" required="required" title="">
    </div>
</div>
<div class="form-group">
<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
   <label>Năm can chi</label>  
    </div>

    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
    
    <input type="text" name="ho" id="input" class="form-control" value="<?php echo $nam_can_chi?> " min=""} max="" step="" required="required" title="">
    </div>
</div>

  

   <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <button type="submit" class="btn btn-primary" value="Submit">Submit</button>
                </div>
</form>
</div>
</body>
</html>