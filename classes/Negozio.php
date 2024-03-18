<?php
class Negozio{
    protected $nome;
    protected $telefono;
    protected $indirizzo;
    protected $url;
    protected $p_iva;
    protected $dati_negozio = [];   
    protected $ordini = [];
    protected $articoli = [];

    public function __construct(){
        $this->setNome("Bershka");
        $this->setTelefono(1234567890);
        $this->setIndirizzo("Via dei Gigli 200");
        $this->setUrl("BershkaGigli.com");
        $this->setP_IVA("DDDDDDDDDDD");
        $ordine1 = new OrdiniFisici(1, "01/01/2023", 100, "carta");
        $ordine2 = new OrdiniFisici(2, "02/02/2023", 200, "contanti");
        $ordine3 = new OrdiniOnline(3, "03/03/2023", 300, "172.16.0.0", "03");
        $ordine4 = new OrdiniOnline(4, "04/04/2023", 400, "172.32.0.0", "04");
        $articolo1 = new Articolo(1, "pantalone", "jeans", 10);
        $articolo2 = new Articolo(2, "giacca", "gialla", 20);
        $articolo3 = new Articolo(3, "maglietta", "bianca", 30);
        array_push($this->dati_negozio, $this->getNome());
        array_push($this->dati_negozio, $this->getTelefono());
        array_push($this->dati_negozio, $this->getIndirizzo());
        array_push($this->dati_negozio, $this->getUrl());
        array_push($this->dati_negozio, $this->getP_IVA());

        array_push($this->ordini, $ordine1);
        array_push($this->ordini, $ordine2);
        array_push($this->ordini, $ordine3);
        array_push($this->ordini, $ordine4);
        array_push($this->articoli, $articolo1);
        array_push($this->articoli, $articolo2);
        array_push($this->articoli, $articolo3);
        $vendita1 = new Articolo_venduto(1, 1000, 10);
        $vendita2 = new Articolo_venduto(2, 2000, 20);
        $vendita3 = new Articolo_venduto(3, 3000, 30);
        $vendita4 = new Articolo_venduto(4, 4000, 40);
        $vendita5 = new Articolo_venduto(5, 5000, 50);
    }

    public function getNome(){
        return $this->nome;
    }
    public function getTelefono(){
        return $this->telefono;
    }
    public function getIndirizzo(){
        return $this->indirizzo;
    }
    public function getUrl(){
        return $this->url;
    }
    public function getP_IVA(){
        return $this->p_iva;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }
    public function setIndirizzo($indirizzo){
        $this->indirizzo = $indirizzo;
    }
    public function setUrl($url){
        $this->url = $url;
    }
    public function setP_IVA($p_iva){
        $this->p_iva = $p_iva;
    }

    //punto 1
    public function getDatiNegozio(){
        return $this->dati_negozio;
    }

    public function setDatiNegozio($dati_negozio){
        $this->dati_negozio = $dati_negozio;
    }


    //punto 4
    public function getOrdini(){
        return $this->ordini;
    }
    public function setOrdini($ordini){
        $this->ordini = $ordini;
    }
    //punto 2
    public function getArticoli(){
        return $this->articoli;
    }
    public function setArticoli($articoli){
        $this->articoli = $articoli;
    }

    //punto 3
    public function getArticoliDati($id){
        foreach($this->articoli as $art)
        {
            if($art->getId() == $id['identificativo'])
            {
                return $art;
            }
        }
        return null;
    }

    //punto 5
    public function getOrdiniDati($numero_ordine){
        foreach($this->ordini as $ord)
        {
            if($ord->getNumeroOrdine() == $numero_ordine['numero_ordine'])
            {
                return $ord;
            }
        }
        return null;
    }


}



?>