<?php
   import_file('./model/xl_sach');
   $xl_tin_tuc = new xl_sach();

   $ds_tin_tuc=$xl_tin_tuc->lay_tin_tuc_sach($_GET['id_tin']);

   echo '<pre>',print_r($ds_tin_tuc),'</pre>'
?>
<!DOCTYPE html>

<link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>


<body>
<div class="container">
<div class="title_page">
            Tin Tức
        </div>
        <table id="table_sach" class="table table-striped table-hover">
            <thead>
                <tr>
                
                    <th>ID</th>
                    <th>Đơn giá</th>
                    <th>Giá bìa</th>
                    <th>Chọn</th>
                </tr>
            </thead>
            <tbody id="data_show">
            <?php
                foreach($ds_tin_tuc as $item_tin){
                ?>
                <td><?php echo $item_tin; ?></td>
                <?php
                }
                ?>
            </tbody>
        </table>



<script>
            //cách phân trang 2
        $(document).ready( function () {
           $('#table_sach').DataTable();
        } );

     
        </script>
</div>
</body>
</html>