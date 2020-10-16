<?php
include_once('./model/xl_slide_banner.php');
include_once('./model/xl_sach.php');

$xl_slide_banner= new xl_slide_banner();

$ds_slide_banner = $xl_slide_banner->ds_slide_banner();

$xl_sach= new xl_sach();

$ds_sach = $xl_sach->get_sach();

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
    <link rel="stylesheet" href="./images/css/main.scss">
</head>
<body>
    <div class="container-fluid">
    <div id="carousel-id" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php
            foreach($ds_slide_banner as $key => $slide_banner){
                $active = ($key == 0 )?'active':'';
            ?>
            <li data-target="#carousel-id" data-slide-to="2" class="<?php echo $active?>"></li>
                <?php
            }
            ?>
        </ol>
        <div class="carousel-inner">
        <?php 
            foreach($ds_slide_banner as $key =>$slide_banner){
                $active= ($key == 0)?'active':'';
        ?>
            <div class="item <?php echo $active; ?>">
                <img alt="First slide" src="./images/slide_banner/<?php echo $slide_banner->hinh?>" >
            </div>
            <?php
            }
        ?>
        </div>
        <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
    </div>
    <div class="container">
    <div class="">
        <div class="sach_noi_bat">
            <?php
            foreach($ds_sach as $key => $item_sach_noi_bat){
            ?>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <div class="hinh_anh">
                            <img src="./images/sach/<?php echo $item_sach_noi_bat->hinh;?>" alt="">
                        </div>
                        <div class="ten_sach">
                        <?php echo $item_sach_noi_bat->ten_sach ?></div>
                        <div class="ten_sach">
                        <?php echo $item_sach_noi_bat->ten_tac_gia ?><div class="ten_sach">
                        <?php echo $item_sach_noi_bat->don_gia ?> </div>
                        <div class="button_mua_ngay">
                            <a href="<?php echo $item_sach_noi_bat->id ?>">
                        <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                        mua liền
                            </a>
                        </div>
                </div> 
            </div>
            <?php
            }
            ?>
            
        
    </div>

</div>
</body>
</html>