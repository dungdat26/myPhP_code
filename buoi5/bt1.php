<?php 

if(isset($_POST['ten_file']) && isset($_POST['noi_dung'])){
$f = fopen($_POST['ten_file'], "a+") or exit ("Không thể mở file!");

     fwrite($f,$_POST['noi_dung']);
     

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
                    <label for="">label</label>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="ten_file" id="input" class="form-control" value=""  required="required" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <label for="">label</label>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                <textarea name="noi_dung" id="" cols="30" rows="10"> </textarea>
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <div class="hien_thi">
        <?php
        $f = fopen($_POST['ten_file'], "a+") or exit ("Không thể mở file!");
        while(!feof($f)){
                echo fgets($f) .'<br/>';
                }

        ?>
        </div>
    </div>
</body>
</html>