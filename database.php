<?php


$db = new PDO('mysql:host=localhost;dbname=ban_sach_online_db', 'root', '');
// $sql= "INSERT INTO `bs_menu` (`id`, `tieu_de`, `alias`, `trang_thai`, `menu_cha`) VALUES (NULL, 'test 2', 'test 2', '1', '0');";
// $count = $db->exec($sql);
//echo $count;


$db->query("set names utf8");

$SQL_query = "SELECT * FROM bs_sach";
//$mang = $db->query($SQL_query);

$statement = $db->prepare($SQL_query);
$statement->execute();
//$result = $statement->fetch(PDO::FETCH_OBJ);
//$result = $statement->fetch(PDO::FETCH_ASSOC);
$result = $statement->fetchAll(PDO::FETCH_OBJ);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
</head>
<body>
    <div class="container">
    <form action="" method="post">
    <table class="table table-striped table-hover"  border="1, solid, #ccc" spacing ="5px">
    <tr>
        <th>ID </th>
        <th>Tên Sách </th>
        <th>Đơn Giá </th>
        <th>Giá Bìa</th>
        <th>Chọn</th>
    </tr>
    <tr>
        <td>
        <?php
         foreach($result as $item_id){
                ?>
                <div class="id_tac_gia">
                    <?php echo $item_id->id; ?>
                </div>
                <?php
        }
        ?>
        </td>
        <td> 
            <?php
            //echo '<pre>',print_r($result),'</pre>';
            foreach($result as $item_sach){
                ?>
                <div class="ten_sach">
                    <?php echo $item_sach->ten_sach; ?>
                </div>
            <?php
        }
        ?>
        </td>
        
     
    </tr>
    </table>
    </form>
    </div>
</body>
</html>