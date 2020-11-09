<?php
check_and_include_model_database();

class xl_nha_xuat_ban extends database{

    function xl_nha_xuat_ban(){
        parent::database();
    }

    function lay_thong_tin_nha_xuat_ban_theo_id($id_nha_xuat_ban){
        $string_sql = "SELECT *
                        FROM bs_nha_xuat_ban  
                        WHERE id = " . $id_nha_xuat_ban;
        //echo $string_sql;exit;
        $this->setSQL($string_sql);
        $this->execute();
        $result = $this->loadRow();
        return $result;
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

    function xoa_nha_xuat_ban($id_xoa){
        $string_sql= "DELETE FROM bs_nha_xuat_ban WHERE id = " . $id_xoa;
        //echo $string_sql; exit; 
        $this->setSQL($string_sql);
        $result = $this->execute();
        //echo '<pre>',print_r($result),'</pre>';
        return $result;
    
       }

       function cap_nhat_nha_xuat_ban($mang_thong_tin, $id_nha_xuat_ban ){
        $string_build_query = '';
 
        $bien_dem= 0 ;
        foreach($mang_thong_tin as $input_name => $item_input){
            if($input_name != 'btn_save_them_nha_xuat_ban'){
                if($bien_dem == 0){
                    $string_build_query .= $input_name . " = '" . $item_input . "' ";
                }
                else{
                    $string_build_query .=',' . $input_name . " = '" . $item_input . "' ";
                }
                $bien_dem++;
            }
        }
 
         $string_sql= "UPDATE bs_nha_xuat_ban
             SET " . $string_build_query . "
           WHERE id= $id_nha_xuat_ban 
               ";
             //echo $string_sql;exit;
             $this->setSQL($string_sql);
             $result = $this->execute();
            return $result;
             
    }
    

}
?>