<?php
require_once('./src/server/factories/movie-factory.php');

function getMovieById(){
    if(isset($_GET['id'])){
        return makeMovieFactory("getMovieById");
    }
}
?>