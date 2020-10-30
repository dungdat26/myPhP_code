<?php
   import_file('./model/xl_sach');
   $xl_tin_tuc = new xl_sach();

   $ds_tin_tuc=$xl_tin_tuc->lay_tin_chi_tiet($_GET['id_tin']);
   

//    echo '<pre>',print_r($ds_tin_tuc),'</pre>'
?>
<body class="main_content">
    <div class="container">
        <?php echo $ds_tin_tuc->noi_dung_chi_tiet ?>
    </div>
        </div>
    </body>
    </html>