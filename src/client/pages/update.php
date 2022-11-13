<?php
require_once("./src/client/components/title/title.php");
require_once('./src/client/components/head/head.php');
require_once("./src/client/components/footer/footer.php");
require_once('./src/client/utils/echoComponents.php');
require_once("./src/client/components/form/form.php");
require_once("./src/client/routes/getMovieById.php");
require_once("./src/client/routes/updateMovie.php");
require_once("./src/client/components/flexBody/flexBody.php");

$foundMovie = getMovieById();

echoComponents([
    head(),
    title("Movies"),
    flexBody(form("", ["title", "year", "image", 'id'], ["text", "number", "text", "hidden"], [$foundMovie["title"], $foundMovie["year"], $foundMovie["image"], $foundMovie["id"]], ["Update"], ["submit"], [''])),
    footer("Made by Douglas Volcato"),
]);
?>