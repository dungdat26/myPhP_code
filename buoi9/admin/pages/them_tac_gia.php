<?php 
include_once('../model/xl_sach.php');
include_once('../model/xl_tac_gia.php');

$xl_sach = new xl_sach();

$xl_tac_gia= new xl_tac_gia();
$ds_tac_gia = $xl_tac_gia->ds_tac_gia();


if(isset($_POST['btn_save_them_tac_gia'])){
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
         $id_tac_gia_moi = $xl_sach->them_tac_gia($_POST['ten_tac_gia'],$_POST['ngay_sinh'],$_POST['gioi_thieu']);

            if($id_tac_gia_moi){
                ?>
                <script>
                    alert('Thêm sách mới thành công');
                    window.location.href = '/myPhP_code/buoi9/admin/?page=sach';
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
                Tên Tác Giá:
            </div>
            <div class="col-sm-10">
                <input type="text" name="ten_tac_gia" id="input" class="form-control" value="<?php if(isset($_POST['ten_tac_gia'])) echo $_POST['ten_tac_gia']; ?>" title="">
            </div>
        </div> 

        <div class="form-group">
            <div class="col-sm-2 title_input">
                Ngày Sinh:
            </div>
            <div class="col-sm-10">
                <input type="date" name="ngay_sinh" id="input" class="form-control" value="<?php if(isset($_POST['ngay_sinh'])) echo $_POST['ngay_sinh']; ?>"  title="">
            </div>
        </div> 

        <div class="form-group">
            <div class="col-sm-2 title_input">
                Giới Thiệu
            </div>
            <div class="col-sm-10">
                <input type="text" name="gioi_thieu" id="input" class="form-control" value="<?php if(isset($_POST['gioi_thieu'])) echo $_POST['gioi_thieu']; ?>" title="">
            </div>
        </div> 

        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <input type="submit" name="btn_save_them_tac_gia" class="btn btn-primary" value="Thêm tác giả"/>
            </div>
        </div>
    </form>



    </form>
</div>