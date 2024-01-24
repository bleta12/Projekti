<?php
include_once 'Studentrepository.php';
$id = $_GET['id'];

$strep = new StudentRepository();
$strep->deleteStudent($id);

header("location:students.php");
?>