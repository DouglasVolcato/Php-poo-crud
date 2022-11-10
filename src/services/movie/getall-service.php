<?php
class GetAllMoviesUseCase{
    private $repository;

    public function __construct($repository){
        $this->repository = $repository;
    }

    public function execute(){
        return $this->repository->getAllMovies();
    }
}
?>