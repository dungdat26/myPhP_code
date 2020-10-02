<?php 
include "./tinh_toan.php";

if(isset($_POST['so_thu_nhat']) && isset($_POST['so_thu_hai'])){
	$tinh=new pheptinh($_POST['so_thu_nhat'],$_POST['so_thu_hai']);
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
		<?php 
		

        echo "<pre>",print_r($tinh),"</pre>"; 
        echo $tinh->pheptinh();
        ?>
    </div>
</body>
</html>