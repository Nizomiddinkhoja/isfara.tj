<?php

include ("../sql/DBOperations.php");
$id = $_GET["id"];
$dbOperation = new DBOperations();

$dbOperation->deleteWhoIs($id);

header("Location: who_is.php");

