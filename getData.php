<?php
$fGD = $_POST['files'];
 $sumber = "https://api.heirro.net/developers/gdrive/get.json?u=".$fGD;
 $konten = file_get_contents($sumber);
 $data = json_decode($konten, true);

   $linkStream = $data['streaming_jwplayer'];
   $linkDown = $data['download_key'];
   $getFileName = $data['filename'];
   $getImage = $data['preview'];
?>
