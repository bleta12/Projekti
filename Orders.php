<?php

class Orders
{

    private $ID;
    private $produkti;
    private $cmimi;
    private $transporti;
    private $totali;


    public function __construct($produkti, $cmimi, $transporti, $totali)
    {
        $this->produkti = $produkti;
        $this->transporti = $transporti;
        $this->totali = $totali;
        $this->cmimi = $cmimi;
    }


    public function getProdukti()
    {
        return $this->produkti;
    }
    public function setProdukti($produkti)
    {
        $this->produkti = $produkti;
    }
    public function getTransporti()
    {
        return $this->transporti;
    }
    public function setTransporti($transporti)
    {
        $this->transporti = $transporti;
    }
    public function getTotali()
    {
        return $this->totali;
    }
    public function setTotali($totali)
    {
        $this->totali = $totali;
    }
    public function getCmimi()
    {
        return $this->cmimi;
    }
    public function setCmimi($cmimi)
    {
        $this->cmimi = $cmimi;
    }
}
