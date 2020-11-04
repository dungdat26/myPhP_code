<?php
$loai_trang = $_GET['page'];
?>

<body class="admin_page">
<div class="side_bar">
    <div class="menu_quan_ly">
        <a href="/test_php/do_an_nho_nho/admin/?page=dashboard">
            <div class="item_menu <?php if($loai_trang == 'dashboard') echo 'active'; ?>">
                Thống Kê
            </div>
        </a>
        <a href="/myPhP_code/buoi9/admin/?page=sach">
            <div class="item_menu <?php if($loai_trang == 'sach' || $loai_trang == 'them-sach' || $loai_trang == 'cap-nhat-sach') echo 'active'; ?>">
                Quản lý sách
            </div>
        </a>
        <a href="/myPhP_code/buoi9/admin/?page=tac_gia">
            <div class="item_menu <?php if($loai_trang == 'tac_gia' || $loai_trang == 'them_tac_gia' || $loai_trang == 'cap-nhat-sach') echo 'active'; ?>">
                Quản lý Tác Giả
            </div>
        </a>
        <a href="/myPhP_code/buoi9/admin/?page=nha_xuat_ban">
            <div class="item_menu <?php if($loai_trang == 'nha_xuat_ban' || $loai_trang == 'them_nha_xuat_ban' || $loai_trang == 'cap-nhat-sach') echo 'active'; ?>">
                Quản lý Nhà Xuất Bản
            </div>
        </a>
    </div>
</div>
