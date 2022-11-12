<?php
require_once("./src/client/components/movieCard/movieCard.php");

function moviesBody($movies){
    $cards = "";
    foreach($movies as $movie){
        $cards = $cards." ".movieCard($movie);
    }
    
    return '<body class="moviesBody">'.
    $cards.
    '</body>';
}
?>