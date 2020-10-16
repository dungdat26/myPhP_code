<?php 
if(isset ($_GET['page'])){
    if($_GET['page'] == 'sach'){
     include_once('./admin/pages/ds_sach.php');
    }
    else{
        include_once('./pages/trang_chu.php');
    }
}
else{
    include_once('./admin/pages/dangnhap.php');
}
?>