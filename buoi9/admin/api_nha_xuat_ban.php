
<?php 
$so_nha_xuat_ban_tren_trang =10 ;

$db = new PDO('mysql:host=localhost;dbname=ban_sach_online_db', 'root', '');

$db->query("set names utf8");

$trang_hien_tai= (isset($_GET['trang'])) ? $_GET['trang']:0;
$SQL_query="SELECT * FROM bs_nha_xuat_ban LIMIT ".$trang_hien_tai*$so_nha_xuat_ban_tren_trang.",$so_nha_xuat_ban_tren_trang";

$statement = $db->prepare($SQL_query);
$statement->execute();
$ds_sach_hien_thi = $statement->fetchAll(PDO::FETCH_OBJ);


echo json_encode($ds_sach_hien_thi);

?>