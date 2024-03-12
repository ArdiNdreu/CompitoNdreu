<?php 




class RilevatoreDiUmidita  extends rilevatore implements JsonSerializable{

    protected $tipologia;


    function construct_($tipologia){

        $this->tipologia =$tipologia;
        parent::construct_($identificativo,$misurazioni,$UnitaDiMisura,$sogliaDiAllarme,$codiceSeriale);
    }

    public function gettipologia(){
        return $this->tipologia;
    }
    public function settipologia($tipologia){
        $this->tipologia = $tipologia;
    }
    


function jsonSerialize() {


    public function jsonSerialize() {
        $Umidita = [
            "tipologia"=>$this->tipologia,
        ];
        return $Umidita;
    }

}

}



?>
