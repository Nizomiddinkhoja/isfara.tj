<?php
session_start();
include ("../sql/DBOperations.php");
$dbOperation = new DBOperations();
    $id=$_GET["id"];

$dbOperation->editViewRequest($id);

header("Location: request.php");

