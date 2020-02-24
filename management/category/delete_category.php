<?php

include ("../sql/DBOperations.php");
$id = $_GET["id"];
$dbOperation = new DBOperations();

$dbOperation->deleteCategory($id);

header("Location: category.php");

