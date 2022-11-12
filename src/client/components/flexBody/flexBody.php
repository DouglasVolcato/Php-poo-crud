<?php
require_once("./src/client/components/movieCard/movieCard.php");

function flexBody($movies){
    $cards = "";
    foreach($movies as $movie){
        $cards = $cards." ".movieCard($movie);
    }
    
    return '<body class="flexBody">'.
    $cards.
    '</body>';
}
?>