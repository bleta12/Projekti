<?php 
session_start();
include_once 'OrderRepo.php';
$ID=$_GET['id'];
$user_id=$_SESSION['user']['ID'];
$strep=new OrderRepo();
$strep->deleteOrder($ID);
$strep->deleteAllOrders($user_id);

header("location: ShopingCart.php");

?>