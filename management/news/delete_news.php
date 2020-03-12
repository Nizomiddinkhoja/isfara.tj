<?php
session_start();
include ("../sql/DBOperations.php");
$dbOperation = new DBOperations();
    $id=$_GET["id"];

$dbOperation->deleteNews($id);

header("Location: news.php");