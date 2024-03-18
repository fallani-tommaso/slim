<?php
class Articolo_venduto implements JsonSerializable{
    protected $id_vendita;
    protected $prezzo_di_vendita;
    protected $quantita_acquistata;
    

    public function __construct($id_vendita, $prezzo_di_vendita, $quantita_acquistata){
        $this->id_vendita = $id_vendita;
        $this->prezzo_di_vendita = $prezzo_di_vendita;
        $this->quantita_acquistata = $quantita_acquistata;
    }

    public function getIdVendita(){
        return $this->id_vendita;
    }
    public function getPrezzoDiVendita(){
        return $this->prezzo_di_vendita;
    }
    public function getQuantitaAcquistata(){
        return $this->quantita_acquistata;
    }
    public function setIdVendita($id_vendita){
        $this->id_vendita = $id_vendita;
    }
    public function setPrezzoDiVendita($prezzo_di_vendita){
        $this->prezzo_di_vendita = $prezzo_di_vendita;
    }
    public function setQuantitaAcquistata($quantita_acquistata){
        $this->quantita_acquistata = $quantita_acquistata;
    }
    public function jsonSerialize() {
        $attrs = [];
        $class_vars = get_class_vars(get_class($this));
        foreach ($class_vars as $name => $value) {
            $attrs[$name]=$this->{$name};
        }
        return $attrs;
    }
    //toString
    


}
?>