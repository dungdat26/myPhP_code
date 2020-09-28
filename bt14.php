<?php
$mang_dong_vat=array(
array("ten_dong_vat"=>"hổ","mo_ta"=>"còn gọi là cọp, hùm, ông ba mươi) (Panthera tigris) "),
array("ten_dong_vat"=>"Khỉ","mo_ta"=>"Monkey is a common name that may refer to groups or species of mammals, in part, the simians of infraorder Simiiformes."),
array("ten_dong_vat"=>"chim","mo_ta"=>"Birds are a group of warm-blooded vertebrates constituting the class Aves, characterized by feathers, toothless beaked jaws, the laying of hard-shelled eggs"),
);
$id_dong_vat = 0;
if(isset($_GET['id_dong_vat'])){
$id_dong_vat = $_GET['id_dong_vat']; 
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
   <title-block>Từ điển động vật</title-block> 
<form action="" method="post">

<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    <legend>từ điển động vật</legend>
    <div class="danh_sach_chon_dong_vat">
       <?php
        foreach($mang_dong_vat as $key => $dong_vat){        
        ?>
   <div class="ten_dong_vat">
       <a href="?id_dong_vat=<?php echo $key; ?>"> <?php echo $dong_vat['ten_dong_vat']; ?></a>
       
   </div>
   <?php
                }
    ?>
</div>
 </div>
 <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
     <div class="title_block"> 
     Thông tin động vật
     </div>
     <div class="mieu_ta">
     <?php echo $mang_dong_vat[$id_dong_vat]['mo_ta']; ?>
     
     
     </div>
 </div>
 




</form>
</div>
</body>
</html>