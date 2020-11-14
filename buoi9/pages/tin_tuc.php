<?php
   import_file('./model/xl_sach');
   $xl_tin_tuc = new xl_sach();

   $ds_tin_tuc=$xl_tin_tuc->lay_tin_tuc();

//    echo '<pre>',print_r($ds_tin_tuc),'</pre>'
?>


<link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>


<body>
<div class="container">
<div class="title_page">
            Tin Tức
        </div>
        <table id="table_tin_tuc" class="table table-striped table-hover">
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="data_show">
            <?php 
                foreach($ds_tin_tuc as $item_tin_tuc){
            ?>
            <tr>
                <td>
                    
                        <img src="./images/tin_tuc/<?php echo $item_tin_tuc->hinh_dai_dien; ?>" alt="" style="width: 150px;">
                    
                </td>
                
                <td>
                    <div class="tieu_de_tin">
                        <a href="/myPhP_code/buoi9/?page=tin_chi_tiet&id_tin=<?php echo $item_tin_tuc->id ?> ">
                    <?php echo $item_tin_tuc->tieu_de_tin; ?>
                    </a></div></br>
                     <?php echo $item_tin_tuc->noi_dung_tom_tat; ?>
                </td>
                
            </tr>
            <?php
                }
                ?>
            </tbody>
        </table>



<script>
       $(document).ready( function () {
    $('#table_tin_tuc').DataTable();
} );
        </script>
</div>
</body>
</html>