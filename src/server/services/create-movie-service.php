<?php
require_once("./src/server/entities/movie-entity.php");

class CreateMovieUseCase{
    private $repository;

    public function __construct($repository){
        $this->repository = $repository;
    }

    public function execute($title, $year, $image){
        $newMovie = new MovieEntity($title, $year, $image);
        $newMovie->validate();
        $movieBody = $newMovie->getMovie();
        return $this->repository->createMovie($movieBody->title, $movieBody->year, $movieBody->image);
    }
}
?>