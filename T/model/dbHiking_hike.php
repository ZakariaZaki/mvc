<?php
$hikeID = $_GET['hikeID'];
$sql="SELECT * FROM hiking WHERE id='$hikeID'";
$request = $bdd->query($sql);
// $row = $request->fetch(PDO::FETCH_ASSOC);
$name = "";
$difficulty = "";
$distance = "";
$duration = "";
$height_difference = "";
$available = "";
 ?>
