<?php

include ("../sql/DBOperations.php");
$id = $_GET["id"];
$dbOperation = new DBOperations();

$dbOperation->deleteSliderImg($id);

header("Location: edit_slider.php?id=$id");