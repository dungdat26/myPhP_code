<?php 
include_once('../model/xl_sach.php');
include_once('../model/xl_nha_xuat_ban.php');

$xl_sach = new xl_sach();

$xl_nha_xuat_ban= new xl_nha_xuat_ban();

$id_cap_nhat = $_GET['id_nha_xuat_ban'];

$thong_tin_nha_xuat_ban_cap_nhat=$xl_nha_xuat_ban->lay_thong_tin_nha_xuat_ban_theo_id($id_cap_nhat);


if(isset($_POST['btn_save_them_nha_xuat_ban'])){
    $hop_le = true;

    foreach($_POST as $key => $item_input){
        if($item_input === ''){
            
            $hop_le = false;
            ?>
            <script>
                alert('Chưa nhập đủ thông tin <?php echo $key;?>');
            </script>
            <?php
            break;
            }
    }

         if($hop_le == true){

            $result= $xl_nha_xuat_ban->cap_nhat_nha_xuat_ban($_POST,$id_cap_nhat);

            if($result){
                ?>
                <script>
                    alert('Cập nhật thông tin nhà xuất bản thành công');
                    //window.location.href = '/myPhP_code/buoi9/admin/?page=nha_xuat_ban';
                </script>
                <?php
            }
            else{
                ?>
                <script>
                    alert('Có lỗi xảy ra trong quá trình thêm!');
                </script>
                <?php
            }

        }

    }
?>
<div class="title_page">
    Thêm Tác Giả
</div>

<div class="include_form_process">
    
    <form action="" method="POST" class="form-horizontal" role="form">
    
        <div class="form-group">
            <div class="col-sm-2 title_input">
                Tên Nhà Xuất Bản
            </div>
            <div class="col-sm-10">
                <input type="text" name="ten_nha_xuat_ban" id="input" class="form-control" value="<?php 
                if(isset($_POST['ten_nha_xuat_ban'])) 
                    echo $_POST['ten_nha_xuat_ban'];
                else if($thong_tin_nha_xuat_ban_cap_nhat) 
                    echo $thong_tin_nha_xuat_ban_cap_nhat->ten_nha_xuat_ban;
                    ?>" title="">
            </div>
        </div> 

        <div class="form-group">
            <div class="col-sm-2 title_input">
                Địa Chỉ
            </div>
            <div class="col-sm-10">
                <input type="text" name="dia_chi" id="input" class="form-control" value="<?php 
                if(isset($_POST['dia_chi'])) 
                    echo $_POST['dia_chi'];
                else if($thong_tin_nha_xuat_ban_cap_nhat) 
                    echo $thong_tin_nha_xuat_ban_cap_nhat->dia_chi; 
                ?>"  title="">
            </div>
        </div> 

        <div class="form-group">
            <div class="col-sm-2 title_input">
                Điện Thoại
            </div>
            <div class="col-sm-10">
                <input type="text" name="dien_thoai" id="input" class="form-control" value="<?php 
                if(isset($_POST['dien_thoai'])) 
                    echo $_POST['dien_thoai']; 
                else if($thong_tin_nha_xuat_ban_cap_nhat) 
                    echo $thong_tin_nha_xuat_ban_cap_nhat->dien_thoai;    
                    ?>" title="">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2 title_input">
                Email
            </div>
            <div class="col-sm-10">
                <input type="text" name="email" id="input" class="form-control" value="<?php 
                if(isset($_POST['email']))
                    echo $_POST['email']; 
                else if($thong_tin_nha_xuat_ban_cap_nhat) 
                    echo $thong_tin_nha_xuat_ban_cap_nhat->email;
                 ?>" title="">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <input type="submit" name="btn_save_them_nha_xuat_ban" class="btn btn-primary" value="Thêm nhà xuất bản"/>
            </div>
        </div>
    </form>



    </form>
</div>