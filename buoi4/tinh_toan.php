<?php 
class pheptinh{
    public $so_thu_nhat,$so_thu_hai;
    function __construct($so_thu_hai,$so_thu_nhat){
        $this->so_thu_nhat=$so_thu_nhat;
        $this->so_thu_hai=$so_thu_hai;
    }
    function pheptinh(){
        $so_thu_nhat='';
        $so_thu_hai='';
        $toantu='';
        switch ($toantu) {
            case '1':
              return $this->$so_thu_nhat + $so_thu_hai; 
                break;
            case '2':
                return $this->$so_thu_nhat - $so_thu_hai; 
                break;
            case '3':
                return $this->$so_thu_nhat * $so_thu_hai; 
                break;
             case '4':
                return $this->$so_thu_nhat / $so_thu_hai; 
                break;
            
        }
    }
}
?>