<?php
while ($row = $request->fetch(PDO::FETCH_ASSOC)) {
  $linkList .= '<a class="hikingLinks" href="index.php?page=hike&hikeID='.$row['id'].'">'.$row['name'].'</a><br>';
}
 ?>
