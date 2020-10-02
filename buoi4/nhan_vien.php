<?php 
include "./demo_nhanvien.php";
$nhanvien_1 =new nhanvien('ms_01','Nguy_Dũng_Đạt','1-1-2021','26-02-1997','1.7','0');


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
        <?php 
        echo "<pre>",print_r($nhanvien_1),"</pre>"; 
        echo $nhanvien_1->tien_luong();
        ?>
    </div>
</body>
</html>