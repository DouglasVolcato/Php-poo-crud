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
        $this->$createMovieUseCase
        $this->$deleteMovieUseCase;
        $this->$getAllMoviesUseCase;
        $this->$getMovieByIdUseCase;
        $this->$updateMovieUseCase;
    }

    public function createMovieController(){
        $created = $this->createMovieUseCase->execute($movie);
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
        $foundMovie = $this->getMovieByIdUseCase->execute($id);
        return $foundMovie;
    }

    public function updateMovie(){
        $updated = $this->updateMovieUseCase->execute($movie);
        if($updated){
            echo "<script>alert('Movie updated successfully!'); document.location='index.php'</script>";
            return;
        }
    }

    public function deleteMovie(){
        $deleted = $this->deleteMovieUseCase->execute($id);
        if($deleted){
            echo "<script>alert('Movie deleted successfully'); document.location='index.php'</script>";
            return;
        }
    }
}
?>