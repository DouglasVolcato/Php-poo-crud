<?php
require_once("./src/client/components/title/title.php");
require_once("./src/client/components/form/form.php");
require_once("./src/client/components/flexBody/flexBody.php");
require_once("./src/client/components/footer/footer.php");
require_once("./src/client/routes/getAllMovies.php");
require_once('./src/client/components/head/head.php');
require_once('./src/client/utils/echoComponents.php');

    echoComponents([
        head(),
        title("Movies"),
        form(['title', 'year', 'image'], ['text', 'number', 'text'], ['', '', ''], ['Add movie'], ['submit']),
        flexBody(getAllMovies()),
        footer("Made by Douglas Volcato"),
    ]);
?>