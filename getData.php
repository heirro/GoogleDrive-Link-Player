<?php
$method = $_POST['files']; // Method GET data via POST Form //
/////////////////////
 $search = "https://api.heirro.net/developers/gdrive/get.json?u=".$method;
 $result = file_get_contents($search);
 $data = json_decode($result, true);
/////////////////////
   $linkStream = $data['streaming_jwplayer'];
   $linkStream02 = $data['streaming_html5'];
   $linkDown = $data['download_key'];
   $getFileName = $data['filename'];
   $getImage = $data['preview'];
   $linkDownPrivate = $data['download_host'];
?>
