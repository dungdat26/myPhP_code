<?php 
header('Content-Type: application/json');

include_once('../../libraries/function_support.php');

include_once('../../model/xl_nha_xuat_ban.php');

if($_SERVER['REQUEST_METHOD'] == "GET"){

    $xl_nha_xuat_ban= new xl_nha_xuat_ban();

    $ds_nha_xuat_ban=$xl_nha_xuat_ban->ds_nha_xuat_ban();

    echo json_encode(
        array(
            'error' => false,
            'message' => 'read all data',
            'data' => $ds_nha_xuat_ban
        )
    );
}
else if($_SERVER['REQUEST_METHOD'] == "POST"){
    $string_data = file_get_contents("php://input");
    //echo $string_data;
    $info_nha_xuat_ban= json_decode($string_data);
    //echo '<pre>.print_r($info_sach).'</pre>';

    $xl_nha_xuat_ban= new xl_nha_xuat_ban();
    $id_insert= $xl_nha_xuat_ban->them_nha_xuat_ban($info_nha_xuat_ban->ten_nha_xuat_ban,$info_nha_xuat_ban->dia_chi, $info_nha_xuat_ban->dien_thoai,$info_nha_xuat_ban->email);

   echo json_encode(
        array(
            'error' => false,
            'message' => 'Create new publicsher successsfully',
            'data' => $id_insert
        )
    );
}
else if($_SERVER['REQUEST_METHOD'] == "PUT"){
    //echo 'update data';
    $string_data = file_get_contents("php://input");
    //echo $string_data;
    $info_nha_xuat_ban = json_decode($string_data);
    //echo '<pre>',print_r($info_sach),'</pre>';

    $array_data = get_object_vars($info_nha_xuat_ban);
    $id_cap_nhat = $array_data['id_cap_nhat'];
    unset($array_data['id_cap_nhat']);
    //echo '<pre>',print_r($array_data),'</pre>';

    $xl_nha_xuat_ban= new xl_nha_xuat_ban();
    $result =  $xl_nha_xuat_ban->cap_nhat_nha_xuat_ban($array_data, $id_cap_nhat);

    echo json_encode(
        array(
            'error' => false,
            'message' => 'update publicsher successfully',
            'data' => $result
        )
    );
}

else if($_SERVER['REQUEST_METHOD'] == "DELETE"){
    $string_data = file_get_contents("php://input");
    //echo $string_data;
    $info_nha_xuat_ban = json_decode($string_data);
    //echo '<pre>',print_r($info_sach),'</pre>';

    $xl_nha_xuat_ban= new xl_nha_xuat_ban();
    $result = $xl_nha_xuat_ban->xoa_nha_xuat_ban($info_nha_xuat_ban->id_xoa);
    echo json_encode(
        array(
            'error' => false,
            'message' => 'Delete publicsher successfully',
            'data' => $result
        )
    );
}
else{
    echo 'this method is not supported';
}

?>