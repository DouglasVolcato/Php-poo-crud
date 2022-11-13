<?php
require_once("./src/client/routes/deleteMovie.php");

deleteMovie();
echo '<script>window.location.replace("?page=home")</script>';
?>