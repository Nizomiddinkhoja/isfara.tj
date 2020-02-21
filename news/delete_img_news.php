<?php

include ("../sql/DBOperations.php");
$id = $_GET["id"];
$dbOperation = new DBOperations();

$dbOperation->deleteNewsImg($id);

header("Location: edit_news.php?id=$id");