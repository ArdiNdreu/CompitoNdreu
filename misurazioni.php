<?php 

class misurazioni{


    protected $data;
    protected $valore;

    function __construct($data,$valore){

        $this->data=$data;
        $this->valore=$valore;
    }

    public function getdata(){  
        return $this->data;
}
public function setdata(){
    $this->data=$data;
}

public function getvalore(){
     return $this->valore;
}

public function setvalore($valore){
    $this->valore=$valore;
}


}

?>