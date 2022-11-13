<?php
require_once('./src/server/factories/movie-factory.php');

function deleteMovie(){
    if(isset($_GET['id'])){
        makeMovieFactory("deleteMovie");
    }
}
?>