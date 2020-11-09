<?php 
include_once('../model/xl_sach.php');
include_once('../model/xl_tac_gia.php');

$xl_sach = new xl_sach();

$xl_tac_gia= new xl_tac_gia();

$id_cap_nhat = $_GET['id_tac_gia'];

$thong_tin_tac_gia_cap_nhat=$xl_tac_gia->lay_thong_tin_tac_gia_theo_id($id_cap_nhat);




if(isset($_POST['btn_save_cap_nhat_tac_gia'])){
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
         $result= $xl_tac_gia->cap_nhat_tac_gia($_POST,$id_cap_nhat);

            if($result){
                ?>
                <script>
                    alert('Cập nhật tác giả thành công');
                    //window.location.href = '/myPhP_code/buoi9/admin/?page=tac_gia';
                </script>
                <?php
            }
            else{
                ?>
                <script>
                    alert('Có lỗi xảy ra trong quá trình cập nhật!');
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
                <input type="text" name="ten_tac_gia" id="input" class="form-control" value="<?php 
                if(isset($_POST['ten_tac_gia'])) 
                    echo $_POST['ten_tac_gia']; 
                else if($thong_tin_tac_gia_cap_nhat) 
                    echo $thong_tin_tac_gia_cap_nhat->ten_tac_gia; 
                ?>" title="">
            </div>
        </div> 

        <div class="form-group">
            <div class="col-sm-2 title_input">
                Ngày Sinh:
            </div>
            <div class="col-sm-10">
                <input type="date" name="ngay_sinh" id="input" class="form-control" value="<?php 
                if(isset($_POST['ngay_sinh'])) 
                    echo $_POST['ngay_sinh'];
                else if($thong_tin_tac_gia_cap_nhat) 
                    echo $thong_tin_tac_gia_cap_nhat->ngay_sinh; 
                ?>"  title="">
            </div>
        </div> 

        <div class="form-group">
            <div class="col-sm-2 title_input">
                Giới Thiệu
            </div>
            <div class="col-sm-10">
            <textarea name="gioi_thieu" id="input" class="form-control" rows="3"><?php 
                if(isset($_POST['gioi_thieu'])) 
                    echo $_POST['gioi_thieu'];
                else if($thong_tin_tac_gia_cap_nhat)
                    echo trim($thong_tin_tac_gia_cap_nhat->gioi_thieu);
                ?></textarea>
            </div>
        </div> 

        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <input type="submit" name="btn_save_cap_nhat_tac_gia" class="btn btn-primary" value="cập nhật tác giả"/>
            </div>
        </div>
    </form>



    </form>
</div>