<?php 
class pheptinh{
        public $so_thu_nhat ,$so_thu_hai ;
    function __construct($value_1,$value_2)
    {
        $this->so_thu_hai=$value_2;
        $this->so_thu_nhat=$value_1;
    }
    function cong()
    {
       return $this->so_thu_nhat + $this->so_thu_hai;
        
    }
    function tru()
    {
       return $this->so_thu_nhat - $this->so_thu_hai;
        
    }
    function nhan()
    {
       return $this->so_thu_nhat * $this->so_thu_hai;
        
    }
    function chia()
    {
       return $this->so_thu_nhat /  $this->so_thu_hai;
        
    }



}
?>