<?php
include_once('../model/xl_nha_xuat_ban.php');

$xl_nha_xuat_ban = new xl_nha_xuat_ban();

$so_nha_xuat_ban_tren_trang = 10;

$trang_hien_tai = (isset($_GET['trang']))?$_GET['trang']:0;

//lay danh sach theo trang

$ds_sach_hien_thi = $xl_nha_xuat_ban->ds_nha_xuat_ban_phan_trang($trang_hien_tai, $so_nha_xuat_ban_tren_trang);

//echo '<pre>',print_r($ds_sach_hien_thi),'</pre>';

$so_luong_nha_xuat_ban = ($xl_nha_xuat_ban->so_luong_nha_xuat_ban())->so_nha_xuat_ban;
//echo '<pre>',print_r($$so_luong_tac_gia),'</pre>';
echo $so_luong_nha_xuat_ban;
$so_trang = ceil($so_luong_nha_xuat_ban/$so_nha_xuat_ban_tren_trang);
?>
    <script type="text/javascript" src="./js/simple_pagination.js"></script>
    <link rel="stylesheet" href="./css/simple_pagination.css">
    
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

        <a href="/myPhP_code/buoi9/admin/?page=them_nha_xuat_ban">
            <button type="button" class="btn btn-info">Thêm Nhà Xuất Bản Mới</button>
        </a>
        
    </div>
    

    <table id="table_sach" class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên Nhà Xuất Bản</th>
                <th>Địa Chỉ</th>
                <th>Điện Thoại</th>
                <th>Email</th>
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
                <td>${data_list[i].ten_nha_xuat_ban}</td>
                <td>${data_list[i].dia_chi}</td>
                <td>${data_list[i].dien_thoai}</td>
                <td>${data_list[i].email}</td>
            </tr>
            `
        }

        console.log(string_html);

        $('#data_show').html(string_html);
    }


    function get_ds_nha_xuat_ban_theo_trang(pageNumber){
        $.get('http://localhost:/myPhP_code/buoi9/admin/api_nha_xuat_ban.php?trang=' + (pageNumber - 1))
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
            items: <?php echo $so_luong_nha_xuat_ban; ?>,
            itemsOnPage: 10,
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

                get_ds_nha_xuat_ban_theo_trang(pageNumber);

            }
        });

        get_ds_nha_xuat_ban_theo_trang(1);
    });
    </script>
</div>