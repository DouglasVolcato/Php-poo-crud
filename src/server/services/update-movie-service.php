<?php
class UpdateMovieUseCase{
    private $repository;

    public function __construct($repository){
        $this->repository = $repository;
    }

    public function execute($title, $year, $image, $id){
        return $this->repository->updateMovie($title, $year, $image, $id);
    }
}
?>