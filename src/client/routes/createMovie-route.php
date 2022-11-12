<?php
require_once('./src/server/factories/movie-factory.php');

if(isset($_POST['title'])){
    $created = makeMovieFactory("createMovie");
}
?>