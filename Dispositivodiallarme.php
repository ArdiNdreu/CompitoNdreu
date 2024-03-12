<?php

include_once  "Impianto";

class DIspostivitodiallarme extends Impianto implements JsonSerializable{

    protected $identificativo;
    protected $numeroditelefono;


    function __construct($identificativo, $numeroditelefono) {

        $this->identificativo = $identificativo;
        $this->numeroDiTelefono = "32429";
        parent::__construct($nome, $latitudine, $langitudine );    
    }

    public function getIdentificativo() {
        return $this->identificativo;
    }

    public function setIdentificativo($identificativo) {
        $this->identificativo = $identificativo;
    }
    
    public function getnumeroditelefono() {
        return $this->identificativo;
    }

    public function setnumeroditelefono($numeroditelefono) {
        $this->numeroditelefono = $numeroditelefono;
    }

}


public function jsonSerialize() {
    $impianto = [
        "identificativo"=>$this->identificativo,
        "numeroditelefono"=>$this->numeroditelefono,
    ];
    return $impianto;
}

?>