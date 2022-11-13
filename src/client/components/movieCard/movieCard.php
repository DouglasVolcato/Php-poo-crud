<?php
require_once('./src/client/components/image/image.php');
require_once('./src/client/components/button/button.php');

function movieCard($movie){
    return '
    <div class="movieCard">
        <p class="movieCard-text">Title: '.$movie['title'].'</p>
        <p class="movieCard-text">Year: '.$movie['year'].'</p>'.
        image($movie['image']).
        button("Update", "button", 'updatePage('.$movie['id'].')', 'green').
        button("Delete", "button", 'deletePage('.$movie['id'].')','red')
    .'</div>
    ';
}
?>