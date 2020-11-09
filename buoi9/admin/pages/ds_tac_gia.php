<?php
include_once('../model/xl_tac_gia.php');

$xl_tac_gia = new xl_tac_gia();
if(isset($_GET['id_xoa'])){
    $id_xoa = $_GET['id_xoa'];
    echo $id_xoa;

    if($id_xoa){
        $result= $xl_tac_gia->xoa_tac_gia($id_xoa);
        if($result){
            ?>
            <script>
                alert("xoá sách thành công !!");
                window.location.href = '/myPhP_code/buoi9/admin/?page=tac_gia';
            </script>
            <?php
        }
    }

}

$so_tac_gia_tren_trang = 16;

$trang_hien_tai = (isset($_GET['trang']))?$_GET['trang']:0;

//lay danh sach theo trang

$ds_sach_hien_thi = $xl_tac_gia->ds_tac_gia_phan_trang($trang_hien_tai, $so_tac_gia_tren_trang);

//echo '<pre>',print_r($ds_sach_hien_thi),'</pre>';

$so_luong_tac_gia = ($xl_tac_gia->so_luong_tac_gia())->so_tac_gia;
//echo '<pre>',print_r($$so_luong_tac_gia),'</pre>';
echo $so_luong_tac_gia;
$so_trang = ceil($so_luong_tac_gia/$so_tac_gia_tren_trang);
?>
    <script type="text/javascript" src="./js/simple_pagination.js"></script>
    <link rel="stylesheet" href="./css/simple_pagination.css">
    <script type="text/javascript" src="./js/function_support.js"></script>
    
    <div class="title_page">
        Danh Sách Sách
    </div>
    <?php
    echo $so_trang;
    ?>

    
    <!-- <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên sách</th>
                <th>Đơn giá</th>
                <th>Giá bìa</th>
                <th>Chọn</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($ds_sach_hien_thi as $item_sach){
            ?>
            <tr>
                <td><?php echo $item_sach->id; ?></td>
                <td><?php echo $item_sach->ten_sach; ?></td>
                <td><?php echo $item_sach->don_gia; ?></td>
                <td><?php echo $item_sach->gia_bia; ?></td>
                <td>
                    <input type="checkbox" name="chon_sach[]" value="<?php echo $item_sach->id; ?>">
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <div class="phan_trang">

        <ul class="pagination">
            <?php
            for($i = 0; $i < $so_trang; $i++){
            ?>
            <li><a href="<?php echo $_SERVER['REQUEST_URI']; ?>&trang=<?php echo $i; ?>"><?php echo $i + 1; ?></a></li>
            <?php
            }
            ?>
        </ul>
        
    </div> -->

    <div class="include_button">

        <a href="/myPhP_code/buoi9/admin/?page=them_tac_gia">
            <button type="button" class="btn btn-info">Thêm Tác Giả Mới</button>
        </a>
        
    </div>
    

    <table id="table_sach" class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên Tác Giả</th>
                <th>Ngày Sinh</th>
                <th>Giới Thiệu</th>
            </tr>
        </thead>
        <tbody id="data_show">
        </tbody>
    </table>

    <div id="pagination" class="pagination"></div>
    
    <script>
    // $(document).ready( function () {
    //     $('#table_sach').DataTable();
    // } );

    function function_build_html(data_list){
        var string_html = '';

        for(var i = 0; i < data_list.length; i++){
            string_html += `
            <tr>
                <td>${data_list[i].id}</td>
                <td>
                    <a href="/myPhP_code/buoi9/admin/?page=cap-nhat-tac-gia&id_tac_gia=${data_list[i].id}">
                    ${data_list[i].ten_tac_gia}
                    </a>
                </td>
                <td>${data_list[i].ngay_sinh}</td>
                <td>${data_list[i].gioi_thieu}</td>
                <td>
                    <a href="/myPhP_code/buoi9/admin/?page=tac_gia&id_xoa=${data_list[i].id}" type="button" class="btn btn-danger" onclick="return recheck_delete();">
                   <span class="glyphicon glyphicon-trash" aria-hidden="true"> Xoá</span>
                    </a>
                </td>
            </tr>
            `
        }

        console.log(string_html);

        $('#data_show').html(string_html);
    }


    function get_ds_tac_gia_theo_trang(pageNumber){
        $.get('http://localhost:/myPhP_code/buoi9/admin/api_tac_gia.php?trang=' + (pageNumber - 1))
            .done((data) => {
                console.log(JSON.parse(data));

                function_build_html(JSON.parse(data));
            })
            .fail((err) => {
                console.log(err);
            })
    }

    $(function() {
        $('#pagination').pagination({
            items: <?php echo $so_luong_tac_gia; ?>,
            itemsOnPage: 16,
            cssStyle: 'light-theme',
            onPageClick: function(pageNumber) {
                console.log(pageNumber - 1);
                // // We need to show and hide `tr`s appropriately.
                // var showFrom = perPage * (pageNumber - 1);
                // var showTo = showFrom + perPage;

                // // We'll first hide everything...
                // items.hide()
                //     // ... and then only show the appropriate rows.
                //     .slice(showFrom, showTo).show();

                get_ds_tac_gia_theo_trang(pageNumber);

            }
        });

        get_ds_tac_gia_theo_trang(1);
    });
    </script>
</div>