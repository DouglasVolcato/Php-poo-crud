<?php
require_once("./src/client/components/movieCard/movieCard.php");

function moviesBody($movies){
    echo '<body class="moviesBody">';
    foreach($movies as $movie){
        echo movieCard($movie);
    }
    echo '</body>';
}
?>