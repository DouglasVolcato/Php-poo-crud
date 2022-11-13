<?php
require_once("./src/client/components/movieCard/movieCard.php");

function movieCards($movies){
    $cards = "";
    foreach($movies as $movie){
        $cards = $cards." ".movieCard($movie);
    }
    return $cards;
}
?>