<?php
$fGD = $_POST['files'];
$myAPI = "bypass";
 $sumber = "https://api.heirro.net/developers/gdrive/get.js?u=".$fGD."&key=".$myAPI;
 $konten = file_get_contents($sumber);
 $data = json_decode($konten, true);

   $linkStream = $data['streaming'];
   $linkDown = $data['download'];
   $getFileName = $data['filename'];
   $getImage = $data['preview'];
?>