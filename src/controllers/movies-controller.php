<?php
class MoviesController{
    private $createMovieUseCase;
    private $deleteMovieUseCase;
    private $getAllMoviesUseCase;
    private $getMovieByIdUseCase;
    private $updateMovieUseCase;

    public __construct(
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

    public createMovieController(){
        $created = $this->createMovieUseCase->execute($movie);
        if($created){
            echo "<script>alert('Movie added successfully!'); document.location='index.php'</script>";
            return;
        }
    }

    public getAllMoviesController(){
        $movies = $this->getAllMoviesUseCase->execute();
        return $movies;
    }

    public getMovieByIdController(){
        $foundMovie = $this->getMovieByIdUseCase->execute($id);
        return $foundMovie;
    }

    public updateMovie(){
        $updated = $this->updateMovieUseCase->execute($movie);
        if($updated){
            echo "<script>alert('Movie updated successfully!'); document.location='index.php'</script>";
            return;
        }
    }

    public deleteMovie(){
        $deleted = $this->deleteMovieUseCase->execute($id);
        if($deleted){
            echo "<script>alert('Movie deleted successfully'); document.location='index.php'</script>";
            return;
        }
    }
}
?>