<?php 

if(isset($_POST["chuoi_so"]) ){
    $mang_tang = explode(',', $_POST['chuoi_so']); 
    $mang_giam = explode(',', $_POST['chuoi_so']); 
     sort($mang_tang,SORT_NUMERIC);
     rsort($mang_giam,SORT_NUMERIC);
     
  
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
             <legend>Tính dãy số nhập vào </legend>
     </div>
<div class="form-group">
<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
   <label>Nhập các phần tử:</label>  
    </div>

    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
    
    <input type="text" name="chuoi_so" id="input" class="form-control" value="<?php if(isset($_POST["chuoi_so"]))  echo $_POST["chuoi_so"] ?> " min=""} max="" step="" required="required" title="">
    </div>
</div>

   

<div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <button type="submit" class="btn btn-primary" value="Submit">Submit</button>
                </div>
   <div class="form-group">
       
       <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
           
       <label>tăng dần </label>
       </div>
       
       <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
       
       
       <input type="text" name="" id="input" class="form-control" value="<?php   echo implode(',',$mang_tang)    ?>">
       </div>
   </div>
   <div class="form-group">
       
       <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
           
       <label>giảm dần </label>
       </div>
       
       <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
       
       
       <input type="text" name="" id="input" class="form-control" value="<?php  echo implode(',',$mang_giam)  ?>">
       </div>
   </div>


</form>
</div>
</body>
</html>