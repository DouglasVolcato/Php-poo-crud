<?php
class MoviesRoutes{
    private $controller;
    private $route;

    public function __construct($controller, $route){
        $this->controller = $controller;
        $this->route = $route;
    }

    router(){
        switch($this->route){
            case("createMovie"){
                $this->controller->createMovieController();
            }
            case("getAllMovies"){
                $this->controller->getAllMoviesController();
            }
            case("getMovieById"){
                $this->controller->getMovieByIdController();
            }
            case("updateMovie"){
                $this->controller->updateMovieController();
            }
            case("deleteMovie"){
                $this->controller->deleteMovieController();
            }
        }
    }
}
?>