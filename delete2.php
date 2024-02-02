<?php 

include_once 'OrderRepo.php';
$ID=$_GET['id'];

$strep=new OrderRepo();
$strep->deleteOrder($ID);

header("location: ShopingCart.php");

?>