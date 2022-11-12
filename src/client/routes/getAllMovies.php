<?php
require_once('./src/server/factories/movie-factory.php');

function getAllMovies(){
    return makeMovieFactory("getAllMovies");
}
?>