<?php 
class nhanvien{
    public $ho_ten_nhan_vien,$ma_nhan_vien,$ngay_vao_lam,$ngay_sinh,$heso_luong,$socon;

    function __construct($ma_nhan_vien,$ho_ten_nhan_vien,$ngay_vao_lam,$ngay_sinh,$heso_luong,$socon)
    {
        $this->ma_nhan_vien =$ma_nhan_vien;
        $this->ho_ten_nhan_vien = $ho_ten_nhan_vien;
        $this->ngay_vao_lam = $ngay_vao_lam;
        $this->ngay_sinh =$ngay_sinh;
        $this->heso_luong=$heso_luong;
        $this->socon=$socon;
        
    }
    function tien_luong(){
        return $this->heso_luong * 5000000;

    }
    function tien_tro_cap(){

    }
    function tien_thuong(){
        
    }

}

?>