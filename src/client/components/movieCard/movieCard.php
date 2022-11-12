<?php
require('./src/client/components/image/image.php');

function movieCard($movie){
    return '
    <div class="movieCard">
        <p class="movieCard-text">Title: '.$movie['title'].'</p>
        <p class="movieCard-text">Year: '.$movie['year'].'</p>'.
        image($movie['image'])
    .'</div>
    ';
}
?>