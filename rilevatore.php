<?php

include_once  "Impianto";

class rilevatore  extends Impianto implements JsonSerializable{

    protected $identificativo;
    protected $misurazioni[];
    protected $UnitaDiMisura;
    protected $sogliaDiAllarme;
    protected $codiceSeriale;

    function construct_($identificativo,$misurazioni,$UnitaDiMisura,$sogliaDiAllarme,$codiceSeriale){
        $this->identificativo = $identificativo;
        $this->misurazioni= [
            new misurazioni("12/02/23","15");
            new misurazioni("2/09/1999","37");
            new misurazioni("31/12/01","9");
        ];
        $this->UnitaDiMisura = $UnitaDiMisura;
        $this->codiceSeriale = $codiceSeriale;
        $this->sogliaDiAllarme $sogliaDiAllape;
        parent::construct_($nome, $latitudine, $langitudine);
    }


function jsonSerialize() {


    public function jsonSerialize() {
        $rilevatore = [
            "identificativfo"=>$this->identificativo,
            "misurazioni"=>$this->misurazioni,
            "UnitaDiMisura"=>$this->UnitaDiMisura,
            "sogliaDiMisura"=>$this->sogliaDiAllarme,
            "codiceSeriale"=>$this->codiceSeriale,
        ];
        return $rilevatore;
    }

}

}
?>