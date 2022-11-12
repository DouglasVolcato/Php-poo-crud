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
                $this->controller->createMovieController();
                break;

            case "getAllMovies":
                $this->controller->getAllMoviesController();
                break;

            case "updateMovie":
                $this->controller->getMovieByIdController();
                break;

            case "getAllMovies":
                $this->controller->updateMovieController();
                break;
            
            case "deleteMovie":
                $this->controller->deleteMovieController();
                break;
        }
    }
}
?>