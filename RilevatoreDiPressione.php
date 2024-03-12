
<?php 


class RilevatoreDiPressione  extends rilevatore implements JsonSerializable{

    protected $posizione;


    function construct_($posizione){

        $this->posizione = $posizione;
        parent::construct_($identificativo,$misurazioni,$UnitaDiMisura,$sogliaDiAllarme,$codiceSeriale);
    }




function jsonSerialize() {


    public function jsonSerialize() {
        $Pressione = [
            "posizione"=>$this->posizione,
        ];
        return $Pressione;
    }

}

}

?>