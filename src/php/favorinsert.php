<?php



$UID = $_GET['UID'];

$ImageID = $_GET['imageID'];

require_once('mysqli.php');

$conn = getConnected();

mysqli_query($conn,"INSERT INTO travelimagefavor (UID, ImageID) VALUES ('$UID', '$ImageID')");

header("Location: ../details.php?imageID=$ImageID&UID=$UID");
