<?php

include ("../sql/DBOperations.php");
$id = $_GET["id"];
$img = $_GET["img"];
$dbOperation = new DBOperations();

$dbOperation->deleteNewsImg($id, $img);

header("Location: edit_news.php?id=$id");