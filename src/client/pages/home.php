<?php
require_once("./src/client/components/title/title.php");
require_once("./src/client/components/creationForm/creationForm.php");
require_once("./src/client/components/moviesBody/moviesBody.php");
require_once("./src/client/components/footer/footer.php");
require_once("./src/server/factories/movie-factory.php");

$movieList = makeMovieFactory("getAllMovies");

title("Movies");
creationForm();
moviesBody($movieList);
footer("Made by Douglas Volcato");
?>