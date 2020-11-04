<?php 
include_once('../model/xl_sach.php');
include_once('../model/xl_nha_xuat_ban.php');

$xl_sach = new xl_sach();

$xl_nha_xuat_ban= new xl_nha_xuat_ban();
$ds_nha_xuat_ban = $xl_nha_xuat_ban->ds_nha_xuat_ban();


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
         $id_nha_xuat_ban_moi = $xl_nha_xuat_ban->them_nha_xuat_ban($_POST['ten_nha_xuat_ban'],$_POST['dia_chi'],$_POST['dien_thoai'],$_POST['email']);

            if($id_nha_xuat_ban_moi){
                ?>
                <script>
                    alert('Thêm sách mới thành công');
                    window.location.href = '/myPhP_code/buoi9/admin/?page=nha_xuat_ban';
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
                <input type="text" name="ten_nha_xuat_ban" id="input" class="form-control" value="<?php if(isset($_POST['ten_nha_xuat_ban'])) echo $_POST['ten_nha_xuat_ban']; ?>" title="">
            </div>
        </div> 

        <div class="form-group">
            <div class="col-sm-2 title_input">
                Địa Chỉ
            </div>
            <div class="col-sm-10">
                <input type="text" name="dia_chi" id="input" class="form-control" value="<?php if(isset($_POST['dia_chi'])) echo $_POST['dia_chi']; ?>"  title="">
            </div>
        </div> 

        <div class="form-group">
            <div class="col-sm-2 title_input">
                Điện Thoại
            </div>
            <div class="col-sm-10">
                <input type="text" name="dien_thoai" id="input" class="form-control" value="<?php if(isset($_POST['dien_thoai'])) echo $_POST['dien_thoai']; ?>" title="">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2 title_input">
                Email
            </div>
            <div class="col-sm-10">
                <input type="text" name="email" id="input" class="form-control" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" title="">
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