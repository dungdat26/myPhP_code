<?php
session_start();

include_once('../libraries/function_support.php');
//$_SESSION['ten_dang_nhap'] = 'Hung';



//echo $ten_dang_nhap;


if(isset($_GET['page'])){
    include_once('./widgets/head.php');

    include_once('./widgets/side_bar.php');

    $thong_tin_user_cookie = $_COOKIE['thong_tin_user_cookie'];

    ?>
    <div class="main_content">
    <?php

    if(isset($_SESSION['thong_tin_user']) || $thong_tin_user_cookie){

        $thong_tin_user = $_SESSION['thong_tin_user'];

        if($_GET['page'] == 'sach'){
            include_once('./pages/ds_sach.php');
        }
        else if($_GET['page'] == 'tac_gia'){
            include_once('./pages/ds_tac_gia.php');
        }
        else if($_GET['page'] == 'nha_xuat_ban'){
            include_once('./pages/ds_nha_xuat_ban.php');
        }
        else if($_GET['page'] == 'them_sach'){
            include_once('./pages/them_sach.php');
        }
        else if($_GET['page'] == 'them_tac_gia'){
            include_once('./pages/them_tac_gia.php');
        }
        else if($_GET['page'] == 'them_nha_xuat_ban'){
            include_once('./pages/them_nha_xuat_ban.php');
        }
        else if($_GET['page'] == 'cap-nhat-sach'){
            include_once('./pages/cap_nhat_sach.php');
        }
        else if($_GET['page'] == 'cap-nhat-tac-gia'){
            include_once('./pages/cap_nhat_tac_gia.php');
        }
        else if($_GET['page'] == 'cap-nhat-nha-xuat-ban'){
            include_once('./pages/cap_nhat_nha_xuat_ban.php');
        }
        else if($_GET['page'] == 'dashboard'){
            include_once('./pages/dashboard.php');
        }
        else{
            include_once('./pages/404.php');
        }
    }
    else{
        header('location: /myPhP_code/buoi9/admin/');
    }
    ?>
    </div>
    <?php


    include_once('./widgets/footer.php');
}
else {
    include_once('./pages/dangnhap.php');
}


?>