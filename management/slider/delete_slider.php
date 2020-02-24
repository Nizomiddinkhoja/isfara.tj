<?php

include ("../sql/DBOperations.php");
$id = $_GET["id"];
$dbOperation = new DBOperations();

$dbOperation->deleteSlider($id);

header("Location: slider.php");

