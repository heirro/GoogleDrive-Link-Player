<?php
$fGD = $_POST['files'];
 $sumber = "https://api.heirro.net/developers/gdrive/get.js?u=".$fGD;
 $konten = file_get_contents($sumber);
 $data = json_decode($konten, true);

   $linkStream = $data['streaming'];
   $linkDown = $data['download'];
   $getFileName = $data['filename'];
   $getImage = $data['preview'];
?>
