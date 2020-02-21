<?php

include ("../sql/DBOperations.php");
$id = $_GET["id"];
$dbOperation = new DBOperations();

$dbOperation->deleteWhoIsImg($id);

header("Location: edit_who_is.php?id=$id");