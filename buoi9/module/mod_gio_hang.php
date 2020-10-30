<?php
    if(isset($_SESSION['gio_hang'])){
        $mang_gio_hang = $_SESSION['gio_hang'];
        }
    else{
        $mang_gio_hang = [];
        }
    

?>

<form action="" method="POST">
    <table class="table table-striped table-hover table_gio_hang">
        <thead>
            <tr>
                <th>id</th>
                <th>Tên sách</th>
                <th>hình</th>
                <th>số lượng</th>
                <th>đơn giá</th>
                <th>thành tiền</th>
                <?php 
                if(isset($dieu_kien_cap_nhat_gio_hang)){
                    ?>
                    <th>Hành động</th>
                    <?php
                }
                else{
                    //do nothing
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($mang_gio_hang as $item_gio_hang){
                ?>
                <tr>
                    <td><?php echo $item_gio_hang->id; ?></td>
                    <td><?php echo $item_gio_hang->ten_sach; ?></td>
                    <td>
                        <img src="/myPhp_code/buoi9/images/sach/<?php echo $item_gio_hang->hinh; ?>" alt="">
                    </td>
                    <?php 
                    if(isset($dieu_kien_cap_nhat_gio_hang)){
                    ?>
                    <td>
                        <input type="number" name="so_luong_cap_nhat[<?php echo $item_gio_hang->id; ?>]" 
                            value="<?php echo $item_gio_hang->so_luong; ?>" 
                            id="so_luong_<?php echo $item_gio_hang->id; ?>" class="form-control" 
                            min="1" step="1" title="">
                    </td>
                    <td><?php echo $item_gio_hang->don_gia; ?></td>
                    <td><?php echo $item_gio_hang->so_luong * $item_gio_hang->don_gia; ?></td>
                    <td>
                        <a href="/myPhP_code/buoi9/?page=gio_hang&id_xoa=<?php echo $item_gio_hang->id; ?>">
                            
                            <button type="button" class="btn btn-danger">
                                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                Xóa
                            </button>
                        </a>
                    </td>
                    <?php
                    }
                    else{
                    ?>
                    <td><?php echo $item_gio_hang->so_luong ?></td>
                    <td><?php echo $item_gio_hang->don_gia; ?></td>
                    <td><?php echo $item_gio_hang->so_luong * $item_gio_hang->don_gia; ?></td>
                    <?php
                    }
                    ?>
                </tr>
                <?php
            }
            ?>
        
        </tbody>
    </table>
    <div class="inlcude_button">
    <?php 
        if(isset($dieu_kien_cap_nhat_gio_hang)){
    ?>
        <input type="submit" name="btn_cap_nhat" class="btn btn-primary" value="Cập nhật giỏ hàng" />
        <button type="button" class="btn btn-danger">
            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Xóa giỏ hàng
        </button>
        <a href="/myPhP_code/buoi9/?page=thanh_toan">
                            
                            <button type="button" class="btn btn-danger">
                                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                thanh toán
                                </button>
                        </a>
                <?php
        }
        else{
                ?>
                 <a href="/myPhP_code/buoi9/?page=gio_hang">
                            
                            <button type="button" class="btn btn-danger">
                                <span class="glyphicon glyphicon" aria-hidden="true"></span>
                                quay lại giỏ hàng
                                </button>
                        </a>
            <?php
        }
            ?>
        </div>
</form>