<?php
class OrdiniOnline extends Ordini{
    protected $indirizzo_IP;
    protected $codice_di_autorizzazione;
    public function __construct($numero_ordine, $data, $importo_totale, $indirizzo_IP, $codice_di_autorizzazione){
        $this->numero_ordine = $numero_ordine;
        $this->data = $data;
        $this->importo_totale = $importo_totale;
        $this->indirizzo_IP = $indirizzo_IP;
        $this->codice_di_autorizzazione = $codice_di_autorizzazione;
    }
}
?>