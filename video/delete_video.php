<?php
session_start();
include ("../sql/DBOperations.php");
$dbOperation = new DBOperations();
    $id=$_GET["id"];

$dbOperation->deleteVideo($id);

header("Location: video.php");

