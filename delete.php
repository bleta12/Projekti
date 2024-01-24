<?php 

include_once 'PikturaRepository.php';
$id=$_GET['id'];

$strep=new PikturaRepository();
$strep->deletePiktura($id);

header("location: Tabela.php");

?>