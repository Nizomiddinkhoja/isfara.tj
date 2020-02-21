<?php

include ("../sql/DBOperations.php");
$id = $_GET["id"];
$dbOperation = new DBOperations();

$dbOperation->deleteGallery($id);

header("Location: gallery.php");

