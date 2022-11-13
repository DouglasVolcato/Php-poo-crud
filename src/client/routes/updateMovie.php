<?php
require_once('./src/server/factories/movie-factory.php');

if(isset($_POST['title']) && isset($_POST['id'])){
    makeMovieFactory("updateMovie");
}
?>