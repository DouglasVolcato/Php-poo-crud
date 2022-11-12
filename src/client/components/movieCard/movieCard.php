<?php
function movieCard($movie){
    echo '
    <div class="movieCard">
        <p class="movieCard-text">Title: '.$movie['title'].'</p>
        <p class="movieCard-text">Year: '.$movie['year'].'</p>
        <img class="movieCard-image" src="'.$movie['image'].'"/>
    </div>
    ';
}
?>