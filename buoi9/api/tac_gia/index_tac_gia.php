<?php 
header('Content-Type: application/json');

include_once('../../libraries/function_support.php');

include_once('../../model/xl_tac_gia.php');

if($_SERVER['REQUEST_METHOD'] == "GET"){

    $xl_tac_gia= new xl_tac_gia();

    $ds_tac_gia=$xl_tac_gia->lay_toan_bo_tac_gia();

    echo json_encode(
        array(
            'error' => false,
            'message' => 'read all data',
            'data' => $ds_tac_gia
        )
    );
}
else if($_SERVER['REQUEST_METHOD'] == "POST"){
    $string_data = file_get_contents("php://input");
    //echo $string_data;
    $info_tac_gia= json_decode($string_data);
    //echo '<pre>.print_r($info_sach).'</pre>';

    $xl_tac_gia= new xl_tac_gia();
    $id_insert= $xl_tac_gia->them_tac_gia($info_tac_gia->ten_tac_gia,$info_tac_gia->ngay_sinh, $info_tac_gia->gioi_thieu);

   echo json_encode(
        array(
            'error' => false,
            'message' => 'Create new author successsfully',
            'data' => $id_insert
        )
    );
}
else if($_SERVER['REQUEST_METHOD'] == "PUT"){
    //echo 'update data';
    $string_data = file_get_contents("php://input");
    //echo $string_data;
    $info_tac_gia = json_decode($string_data);
    //echo '<pre>',print_r($info_sach),'</pre>';

    $array_data = get_object_vars($info_tac_gia);
    $id_cap_nhat = $array_data['id_cap_nhat'];
    unset($array_data['id_cap_nhat']);
    //echo '<pre>',print_r($array_data),'</pre>';

    $xl_tac_gia= new xl_tac_gia();
    $result =  $xl_tac_gia->cap_nhat_tac_gia($array_data, $id_cap_nhat);

    echo json_encode(
        array(
            'error' => false,
            'message' => 'update author successfully',
            'data' => $result
        )
    );
}

else if($_SERVER['REQUEST_METHOD'] == "DELETE"){
    $string_data = file_get_contents("php://input");
    //echo $string_data;
    $info_tac_gia = json_decode($string_data);
    //echo '<pre>',print_r($info_sach),'</pre>';

    $xl_tac_gia= new xl_tac_gia();
    $result = $xl_tac_gia->xoa_tac_gia($info_tac_gia->id_xoa);
    echo json_encode(
        array(
            'error' => false,
            'message' => 'Delete author successfully',
            'data' => $result
        )
    );
}
else{
    echo 'this method is not supported';
}

?>