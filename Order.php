<?php

class Order
{

    private $ID;
    private $piktura_id;
    private $user_id;
    private $transporti;
    private $totali;


    public function __construct($piktura_id,$user_id, $transporti, $totali)
    {
        $this->piktura_id = $piktura_id;
        $this->user_id = $user_id;
        $this->transporti = $transporti;
        $this->totali = $totali;
    }


    public function getPiktura_Id()
    {
        return $this->piktura_id;
    }
    public function setPiktura_Id($piktura_id)
    {
        $this->piktura_id = $piktura_id;
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
    public function getUser_Id()
    {
        return $this->user_id;
    }
    public function setUser_Id($user_id)
    {
        $this->user_id = $user_id;
    }
}
