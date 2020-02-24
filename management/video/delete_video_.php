<?php
session_start();
include ("../sql/DBOperations.php");
$dbOperation = new DBOperations();
    $id=$_GET["id"];

$dbOperation->deleteVideo2($id);

header("Location: edit_video.php?id=$id");

