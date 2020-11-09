<?php
check_and_include_model_database();

class xl_tac_gia extends database{

    function xl_tac_gia(){
        parent::database();
    }

    function lay_thong_tin_tac_gia_theo_id($id_tac_gia){
        $string_sql = "SELECT *
                        FROM bs_tac_gia  
                        WHERE id = " . $id_tac_gia;
        //echo $string_sql;exit;
        $this->setSQL($string_sql);
        $this->execute();
        $result = $this->loadRow();
        return $result;
    }

    function so_luong_tac_gia(){
        $string_sql = "SELECT count(*) as so_tac_gia FROM bs_tac_gia";
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

    function xoa_tac_gia($id_xoa){
        $string_sql= "DELETE FROM bs_tac_gia WHERE id = " . $id_xoa;
        //echo $string_sql; exit; 
        $this->setSQL($string_sql);
        $result = $this->execute();
        //echo '<pre>',print_r($result),'</pre>';
        return $result;
    
       }

       function cap_nhat_tac_gia($mang_thong_tin, $id_tac_gia ){
        $string_build_query = '';
 
        $bien_dem= 0 ;
        foreach($mang_thong_tin as $input_name => $item_input){
            if($input_name != 'btn_save_cap_nhat_tac_gia'){
                if($bien_dem == 0){
                    $string_build_query .= $input_name . " = '" . $item_input . "' ";
                }
                else{
                    $string_build_query .=',' . $input_name . " = '" . $item_input . "' ";
                }
                $bien_dem++;
            }
        }
 
         $string_sql= "UPDATE bs_tac_gia
             SET " . $string_build_query . "
           WHERE id= $id_tac_gia 
               ";
             //echo $string_sql;exit;
              $this->setSQL($string_sql);
              $result = $this->execute();
              return $result;
             
    }

}
?>
