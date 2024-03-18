<?php
class Ordini implements JsonSerializable{
    protected $numero_ordine;
    protected $data;
    protected $importo_totale;
    protected $articoli_venduti = [];

    public function __construct($numero_ordine, $data, $importo_totale){
        $this->numero_ordine = $numero_ordine;
        $this->data = $data;
        $this->importo_totale = $importo_totale;
    }

    public function getNumeroOrdine(){
        return $this->numero_ordine;
    }
    public function getData(){
        return $this->data;
    }
    public function getImportoTotale(){
        return $this->importo_totale;
    }
    public function setNumeroOrdine($numero_ordine){
        $this->numero_ordine = $numero_ordine;
    }
    public function setData($data){
        $this->data = $data;
    }
    public function setImportoTotale($importo_totale){
        $this->importo_totale = $importo_totale;
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