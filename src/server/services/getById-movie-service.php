<?php
class GetMovieByIdUseCase{
    private $repository;

    public function __construct($repository){
        $this->repository = $repository;
    }

    public function execute($id){
        return $this->repository->getMovieById($id);
    }
}
?>