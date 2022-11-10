<?php
class CreateMovieUseCase{
    private $repository;
    private $movieEntity;

    public function __construct($repository, $movieEntity){
        $this->repository = $repository;
        $this->movieEntity = $movieEntity;
    }

    public function execute($movie){
        $newMovie = new $this->movieEntity($movie);
        $newMovie.validate();
        $movieBody = $newMovie->getMovie();
        return $this->repository->createMovie($movieBody->title, $movieBody->year, $movieBody->image);
    }
}
?>