<?php
session_start();
include ("../sql/DBOperations.php");
$dbOperation = new DBOperations();
    $id=$_GET["id"];

$dbOperation->deleteJamoatsInfo($id);

header("Location: jamoats.php");

