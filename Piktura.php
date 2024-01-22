<?php

class Piktura{

  private $ID;
  private $piktura;
  private $emri;
  private $autori;
  private $cmimi;

  public function __construct($piktura,$emri,$autori,$cmimi){
    $this->piktura=$piktura;
    $this->emri=$emri;
    $this->autori=$autori;
    $this->cmimi=$cmimi;
   
}


public function getPiktura(){
    return $this->piktura;
}
public function setPiktura($piktura){
    $this->piktura = $piktura;
}
public function getEmri(){
    return $this->emri;
}
public function setEmri($emri){
    $this->emri = $emri;
}
public function getAutori(){
    return $this->autori;
}
public function setAutori($autori){
    $this->autori = $autori;
}
public function getCmimi(){
    return $this->cmimi;
}
public function setCmimi($cmimi){
    $this->cmimi = $cmimi;
}





}




?>