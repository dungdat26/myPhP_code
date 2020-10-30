<?php
function in_ds_sach_theo_data_truyen_vao($ds_sach_can_in){
    foreach($ds_sach_can_in as $key =>  $item_sach){
        ?>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 item_sach">
            <div class="">
                <div class="hinh_sach">
                  <a href="/myPhP_code/buoi9/?page=chi_tiet_sach&id_sach=<?php echo $item_sach->id ?>">
                  <img src="./images/sach/<?php echo $item_sach->hinh; ?>" alt="">
                </div>
                <div class="ten_sach">
                <?php echo $item_sach->ten_sach; ?>
                </div>
                <div class="tac_gia">
                <?php echo $item_sach->ten_tac_gia; ?>
                </div>
                <div class="don_gia">
                <?php echo $item_sach->don_gia; ?>
                </div>
                <div class="button_mua_ngay">
                    <a href="<?php echo $item_sach->id;?>">
                        <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                        Mua ngay
                    </a>
                  </a>
                </div>
            </div>
        </div>
        <?php
    }
}
function import_file($url_file){
    if(file_exists($url_file . '.php')){
        include_once($url_file . '.php');
    }
    else{
        echo 'Check lại file này dùm ' . $url_file . '.php vì nó không tồn tại';
    }
}
function tinh_tong_tien_gio_hang(){
    if(isset($_SESSION['gio_hang'])){
        $mang_gio_hang = $_SESSION['gio_hang'];
    }
    else{
        $mang_gio_hang = [];
    }


    $tong_tien = 0;
    foreach($mang_gio_hang as $item_gio_hang){
        $tong_tien += $item_gio_hang->so_luong * $item_gio_hang->don_gia;
    }

    return $tong_tien;
}
function in_ds_tin_theo_data_truyen_vao($ds_tin_can_in){
    foreach($ds_tin_can_in as $key =>  $item_tin){
        ?>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 item_tin">
            <div class="tin_tuc">
                <div class="hinh_dai_dien">
                  <img src="./images/tin_tuc/<?php echo $item_tin->hinh_dai_dien; ?>" alt="">
                </div>
                <div class="tieu_de_tin">
                <a href="/myPhP_code/buoi9/?page=tin_chi_tiet&id_tin=<?php echo $item_tin->id ?>">
                <?php echo $item_tin->tieu_de_tin; ?>
                </a>
                </div>
                <div class="noi_dung_tom_tat">
                <?php echo $item_tin->noi_dung_tom_tat; ?>
                </div>
            
                </div>
            </div>
        </div>
        <?php
    }
}

function encrypt_custom($string){
    $number_time = 10;
    $new_string = $string;

    for($i = 0; $i < $number_time; $i++){
        $new_string = base64_encode($new_string);
    }

    return $new_string;
}


function decrypt_custom($string){
    $number_time = 10;
    $new_string = $string;

    for($i = 0; $i < $number_time; $i++){
        $new_string = base64_decode($new_string);
    }

    return $new_string;
}


function print_chuoi_html_gio_hang(){

    if(isset($_SESSION['gio_hang'])){
        $mang_gio_hang = $_SESSION['gio_hang'];
    }
    else{
        $mang_gio_hang = [];
    }

    $chuoi_mail_html = '<table  cellspacing="0" cellpadding="10px" border="1">
        <tr>
            <td>Tên sách</td>
            <td>đơn giá</td>
            <td>Số lượng</td>
            <td>Thành tiền</td>
        </tr>
    ';
    foreach($mang_gio_hang as $item_gio_hang){
        $chuoi_mail_html .= '<tr>
            <td>' . $item_gio_hang->ten_sach . '</td>
            <td>' . $item_gio_hang->don_gia . '</td>
            <td>' . $item_gio_hang->so_luong . '</td>
            <td>' . $item_gio_hang->so_luong * $item_gio_hang->don_gia . '</td>
        </tr>';
    }
    $chuoi_mail_html .= '</table>';

    return $chuoi_mail_html;
}


function create_url_review_don_hang($id_don_hang){
    return 'http://localhost:/myPhP_code/buoi9/?page=don_hang&id_don_hang=' . $id_don_hang;
}
?>