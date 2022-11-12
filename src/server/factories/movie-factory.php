<?php
require("./src/server/database/repositories/movie-reposiory.php");
require("./src/server/services/index.php");
require("./src/server/controllers/movies-controller.php");
require("./src/server/routes/movies-routes.php");

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

    $routes =  new MoviesRoutes($moviesController, $route);
    return $routes->router();
}
?>