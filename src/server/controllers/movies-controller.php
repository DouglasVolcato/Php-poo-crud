<?php

class MoviesController{
    private $createMovieUseCase;
    private $deleteMovieUseCase;
    private $getAllMoviesUseCase;
    private $getMovieByIdUseCase;
    private $updateMovieUseCase;

    public function __construct(
        $createMovieUseCase,
        $deleteMovieUseCase, 
        $getAllMoviesUseCase, 
        $getMovieByIdUseCase, 
        $updateMovieUseCase){
        $this->createMovieUseCase = $createMovieUseCase;
        $this->deleteMovieUseCase = $deleteMovieUseCase;
        $this->getAllMoviesUseCase = $getAllMoviesUseCase;
        $this->getMovieByIdUseCase = $getMovieByIdUseCase;
        $this->updateMovieUseCase = $updateMovieUseCase;
    }

    public function createMovieController(){
        $title = $_POST['title'];
        $year = $_POST['year'];
        $image = $_POST['image'];
        $created = $this->createMovieUseCase->execute($title, $year, $image);
        if($created){
            echo "<script>alert('Movie added successfully!'); document.location='index.php'</script>";
            return;
        }
    }

    public function getAllMoviesController(){
        $movies = $this->getAllMoviesUseCase->execute();
        return $movies;
    }

    public function getMovieByIdController(){
        $id = $_GET['id'];
        $foundMovie = $this->getMovieByIdUseCase->execute($id);
        return $foundMovie[0];
    }

    public function updateMovieController(){
        $title = $_POST['title'];
        $year = $_POST['year'];
        $image = $_POST['image'];
        $id = $_POST['id'];
        $updated = $this->updateMovieUseCase->execute($title, $year, $image, $id);
        if($updated){
            echo "<script>alert('Movie updated successfully!'); document.location='index.php'</script>";
            return;
        }
    }

    public function deleteMovieController(){
        $id = $_GET['id'];
        $deleted = $this->deleteMovieUseCase->execute($id);
        if($deleted){
            echo "<script>alert('Movie deleted successfully'); document.location='index.php'</script>";
            return;
        }
    }
}
?>