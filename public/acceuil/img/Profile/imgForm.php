<?php

$file = $_FILES["fichier"];
$chemin = "";
print_r($file);
move_uploaded_file($_FILES["fichier"]["tmp_name"], $chemin . $_FILES["fichier"]["name"]);
$lien = "http://localhost/PAV/Site/img/Profile/" . $_FILES["fichier"]["name"];
echo $lien;
 ?>
<form action="#" method="POST" enctype="multipart/form-data">

  <input type="file" name="fichier" /><br>
  <button type="submit">Envoyer</button>

</form>
