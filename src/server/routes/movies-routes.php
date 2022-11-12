<?php
class MoviesRoutes{
    private $controller;
    private $route;

    public function __construct($controller, $route){
        $this->controller = $controller;
        $this->route = $route;
    }

    public function router(){
        switch($this->route){
            case "createMovie":
                return $this->controller->createMovieController();
                break;

            case "getAllMovies":
                return $this->controller->getAllMoviesController();
                break;

            case "updateMovie":
                return $this->controller->getMovieByIdController();
                break;

            case "getAllMovies":
                return $this->controller->updateMovieController();
                break;
            
            case "deleteMovie":
                return $this->controller->deleteMovieController();
                break;
        }
    }
}
?>