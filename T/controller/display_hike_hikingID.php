<?php
// var_dump($_GET);
$hikeID = $_GET['hikeID'];

while ($row = $request->fetch(PDO::FETCH_ASSOC)) {
  $name = $row['name'];
  $difficulty = $row['difficulty'];
  $distance = $row['distance'];
  $duration = $row['duration'];
  $height_difference = $row['height_difference'];
  $available = $row['available'];
}
 ?>
