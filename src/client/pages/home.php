<?php
require_once("./src/client/components/title/title.php");
require_once("./src/client/components/form/form.php");
require_once("./src/client/components/flexBody/flexBody.php");
require_once("./src/client/routes/getAllMovies.php");
require_once('./src/client/components/head/head.php');
require_once("./src/client/components/footer/footer.php");
require_once('./src/client/utils/echoComponents.php');
require_once('./src/client/routes/createMovie.php');
require_once('./src/client/components/movieCards/movieCards.php');

    echoComponents([
        head(),
        title("Movies"),
        form("", ['title', 'year', 'image'], ['text', 'number', 'text'], ['', '', ''], ['Add movie'], ['submit'], ['']),
        flexBody(movieCards(getAllMovies())),
        footer("Made by Douglas Volcato"),
    ]);
?>