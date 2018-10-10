<?php
if(isset($_POST['files'])){
include ('header.php');
include ('player.php');
include ('footer.php');
}
else {
    include('generator.php');
}
?>