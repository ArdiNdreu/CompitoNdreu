<?php

class Impianto implements JsonSerializable{
    protected $nome;
    protected $latitudine;
    protected $longitudine;     

      protected $lista_dispositivi= array();
     protected $lista_rilevatore = array();
    function __construct($nome, $latitudine, $langitudine) {
        $this->nome = $nome;
        $this->latitudine = $latitudine;
        $this->longitudine = $longitudine;



    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getLatitudine(){
        return $this ->latitudine;
    }

    public function setLatitudine($latitudine){
        $this ->latitudine = $latitudine;
    }

    public function getLongitudine(){
        return $this -> longitudine;
    }

    public function setLongitudine($longitudine){
        $this->longitudine= $longitudine;
    }

    public function jsonSerialize() {
        $i = [
            "nome"=>$this->nome,
            "latitudine"=>$this->latitudine,
            "longitudine"=>$this->longitudine,
        ];
        return $i;
    }

    public function aggiungiDispositivo($allarme){
        array_push($this-> dispositivoDiAllarme, $allarme);
    }
    public function aggiungiRivelatore($rilevatore){
        array_push($this->rilevatore, $rilevatore);
    }
    
    public function getDispositivoDiAllarme(){
        return $this -> dispositivoDiAllarme;
    }

    public function getIdentificativo($identificativo){
        foreach($this -> dispositivoDiAllarme as $a){
            if($a ->getId() == $identificativo){
                return $a;
            }
        }
    }
}

?>