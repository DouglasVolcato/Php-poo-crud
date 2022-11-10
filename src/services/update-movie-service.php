<?php
class UpdateMovieUseCase{
    private $repository;

    public function __construct($repository){
        $this->repository = $repository;
    }

    public function execute($movie){
        return $this->repository->updateMovie($movie->title, $movie->year, $movie->image, $movie->id);
    }
}
?>