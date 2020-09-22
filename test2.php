<?php
if(isset($_POST["chieu_dai"]) && ($_POST["chieu_rong"])){
    print_r($_POST);
    $dien_tich= $_POST["chieu_dai"] * $_POST["chieu_rong"];
   
 
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

<title>Title</title>
</head>
<body>
<div class="container">
        <form action="" method="post" class="horizontal" role="form">
            <div class="form-group">
                <legend>Tính diện tích </legend>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Chiều dài
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                <input id="chieu_dai" class="form-control" type="number" name="chieu_dai" value="<?php if(isset($_POST["chieu_dai"]))  echo $_POST["chieu_dai"] ?>" min="" max="" step="" required="">
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Chiều rộng
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                <input id="chieu_rong" class="form-control" type="number" name="chieu_rong" value="<?php  if(isset($_POST["chieu_rong"])) echo $_POST["chieu_rong"]?>" min="" max="" step="" required="" >
            </div>
            
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                Diện tích
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                <input id="dien_tich" class="form-control" type="number" name="dien_tich" value="<?php echo $dien_tich ?>" >
            </div>

            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <button type="submit" class="btn btn-primary" value="Submit">Submit</button>
                </div>
            </div>

        </form>
    </div>


</body>
</html>