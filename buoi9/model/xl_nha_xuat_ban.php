<?php
check_and_include_model_database();

class xl_nha_xuat_ban extends database{

    function xl_nha_xuat_ban(){
        parent::database();
    }

    function ds_nha_xuat_ban(){

        $string_sql = "SELECT *
                        FROM bs_nha_xuat_ban";
        $this->setSQL($string_sql);
        $this->execute();
        $result = $this->loadAllRow();
        return $result;
        
    }

    function so_luong_nha_xuat_ban(){
        $string_sql = "SELECT count(*) as so_nha_xuat_ban FROM bs_nha_xuat_ban";
        //echo $string_sql; exit;
        $this->setSQL($string_sql);
        $this->execute();
        $result = $this->loadRow();
        return $result;
    }

    function ds_nha_xuat_ban_phan_trang($trang_hien_tai, $so_nha_xuat_ban_tren_trang){
        $string_sql = "SELECT *
        FROM bs_nha_xuat_ban
        LIMIT " . $trang_hien_tai * $so_nha_xuat_ban_tren_trang . ",$so_nha_xuat_ban_tren_trang";
        //echo $string_sql; exit;
        $this->setSQL($string_sql);
        $this->execute();
        $result = $this->loadAllRow();
        return $result;
    }

    function them_nha_xuat_ban($ten_nha_xuat_ban, $dia_chi, $dien_thoai, $email){
        $string_sql = "INSERT INTO bs_nha_xuat_ban (ten_nha_xuat_ban, dia_chi, dien_thoai, email)
         VALUES ( '$ten_nha_xuat_ban', '$dia_chi', '$dien_thoai','$email');";
        //echo $string_sql;exit;
        $this->setSQL($string_sql);
        $this->execute();
        $last_insert_id = $this->lasInsertId();
        return $last_insert_id;
        
    }
    

}
?>