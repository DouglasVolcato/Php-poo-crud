<?php
require("./src/database/repositories/movie-reposiory.php");
require("./src/services/index.php");
require("./src/controllers/movies-controller.php");
require("./src/routes/movies-routes.php");

function makeMovieFactory($route){
    $movieRepository = new MovieRepository();

    $createMovieUseCase = new CreateMovieUseCase($movieRepository);
    $deleteMovieUseCase = new DeleteMovieUseCase($movieRepository);
    $getAllMoviesUseCase = new GetAllMoviesUseCase($movieRepository);
    $getMovieByIdUseCase = new GetMovieByIdUseCase($movieRepository);
    $updateMovieUseCase = new UpdateMovieUseCase($movieRepository);

    $moviesController = new MoviesController(
        $createMovieUseCase,
        $deleteMovieUseCase,
        $getAllMoviesUseCase,
        $getMovieByIdUseCase,
        $updateMovieUseCase);

    return new MoviesRoutes($moviesController, $route);
}
?>