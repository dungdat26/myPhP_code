<?php 
if(isset($_POST["ho_ten"])){
    $mang = explode(' ', $_POST['ho_ten']);
    $ho=$mang[0];
    $ten=$mang[count($mang)-1];
    array_pop($mang);
    $mang[0]='';
    $chu_lot = implode(' ',$mang);
    echo "<pre>",print_r($mang),"</pre>";
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
   <label>Họ và tên </label>  
    </div>

    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
    
    <input type="text" name="ho_ten" id="input" class="form-control" value=" " min=""} max="" step="" required="required" title="">
    </div>
</div>
<div class="form-group">
<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
   <label>Họ </label>  
    </div>

    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
    
    <input type="text" name="ho" id="input" class="form-control" value="<?php echo $ho ?> " min=""} max="" step="" required="required" title="">
    </div>
</div>
<div class="form-group">
<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
   <label>Tên Đệm </label>  
    </div>

    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
    
    <input type="text" name="chu_lot" id="input" class="form-control" value="<?php echo $chu_lot ?> " min=""} max="" step="" required="required" title="">
    </div>
</div>
<div class="form-group">
<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
   <label>Tên </label>  
    </div>

    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
    
    <input type="text" name="ten" id="input" class="form-control" value="<?php echo $ten ?> " min=""} max="" step="" required="required" title="">
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