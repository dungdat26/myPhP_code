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
            <td>
            <?php
                in_ds_tin_theo_data_truyen_vao($ds_tin_tuc);
                ?>
            </td>
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