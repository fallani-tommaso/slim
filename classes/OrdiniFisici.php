<?php
class OrdiniFisici extends Ordini{
    protected $pagamento;
    public function __construct($numero_ordine, $data, $importo_totale, $pagamento){
        $this->numero_ordine = $numero_ordine;
        $this->data = $data;
        $this->importo_totale = $importo_totale;
        $this->pagamento = $pagamento;
    }
}
?>