<?php

include ("../sql/DBOperations.php");
$id = $_GET["id"];
$dbOperation = new DBOperations();

$dbOperation->deleteGalleryImg($id);

header("Location: edit_gallery.php?id=$id");