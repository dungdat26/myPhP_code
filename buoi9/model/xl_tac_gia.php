<?php
check_and_include_model_database();

class xl_tac_gia extends database{

    function xl_tac_gia(){
        parent::database();
    }

    function so_luong_tac_gia(){
        $string_sql = "SELECT count(*) as so_sach FROM bs_tac_gia";
        //echo $string_sql; exit;
        $this->setSQL($string_sql);
        $this->execute();
        $result = $this->loadRow();
        return $result;
    }

    function ds_tac_gia_phan_trang($trang_hien_tai, $so_tac_gia_tren_trang){
        $string_sql = "SELECT *
        FROM bs_tac_gia 
        LIMIT " . $trang_hien_tai * $so_tac_gia_tren_trang . ",$so_tac_gia_tren_trang";
        //echo $string_sql; exit;
        $this->setSQL($string_sql);
        $this->execute();
        $result = $this->loadAllRow();
        return $result;
    }

    function ds_tac_gia(){

        $string_sql = "SELECT *
                        FROM bs_tac_gia";
        $this->setSQL($string_sql);
        $this->execute();
        $result = $this->loadAllRow();
        return $result;
        
    }

    function them_tac_gia($ten_tac_gia,$ngay_sinh,$gioi_thieu){
        $string_sql = "INSERT INTO bs_tac_gia (ten_tac_gia, ngay_sinh, gioi_thieu)
         VALUES ( '$ten_tac_gia', '$ngay_sinh', '$gioi_thieu');";
        //echo $string_sql;exit;
        $this->setSQL($string_sql);
        $this->execute();
        $last_insert_id = $this->lasInsertId();
        return $last_insert_id;
        
    }

}
?>
