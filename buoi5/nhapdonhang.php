<?php
class hang{
    public $ten_hang,$so_luong,$don_gia,$thanh_tien;
    function hang($ten_hang='',$so_luong='',$don_gia='',$thanh_tien=''){
        $this->ten_hang=$ten_hang;
        $this->so_luong=$so_luong;
        $this->don_gia=$don_gia;
        $this->$thanh_tien=$thanh_tien;
    }
    function luu_hang(){
        $f = fopen($_POST['ten_file'], "a+") or exit ("Không thể mở file!");
            while(!feof($f)){
             echo fgets($f) ;
            }
            $noidung= $this->ten_hang.'||'.$this->so_luong.'||'.$this->don_gia.'||'. PHP_EOL; 
            fwrite($f,$noidung);
            fclose($f);   
    }
    function chuyen_dong_thanh_thong_tin($chuoi){
        $mang_thong_tin = explode('||', $chuoi);

        $this->ten_hang = $mang_thong_tin[0];
        $this->so_luong = $mang_thong_tin[1];
        $this->don_gia = $mang_thong_tin[2];
        $this->thanh_tien= $mang_thong_tin[3];
    }
    function thanh_tien(){
        return $this->so_luong*$this->don_gia;
    }
    function in_dong_sach(){
        ?>
        <tr>
            <td>
                <?php echo $this->ten_hang; ?>
            </td>
            <td>
                <?php echo $this->so_luong; ?>
            </td>
            <td>
                <?php echo $this->don_gia; ?>
            </td>
            <td>
                <?php echo $this->thanh_tien(); ?>
            </td>
        </tr>
        <?php
        }
}
?>