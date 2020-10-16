<?php 
include_once('./model/database.php');
class xl_sach extends database{
    function xl_sach(){
        parent::database();
    }

    
    function get_sach(){
        $string_sql = "SELECT s.*, ten_tac_gia 
                        FROM bs_sach s JOIN bs_tac_gia tg ON s.id_tac_gia = tg.id 
                        WHERE noi_bat=1";
        $this->setSQL($string_sql);
        $this->execute();
       $result = $this->loadAllRow();
       return $result;
    }
}
?>