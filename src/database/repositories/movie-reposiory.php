<?php

require_once("../connection/database.php");

class MovieRepository{
    protected $db;

    public function __construct(){
        $this->db = new PDO(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PWD,[ PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ]);
    }

    public function createMovie(string $title, int $year, string $image){
        try{
            $query = $this->db->prepare("INSERT INTO movies(title, year, image) values(?,?,?)");
            $query->execute([$title, $year, $image]);
            echo "<script>alert('Movie added successfully!'); document.location='index.php'</script>";

        } catch(Exception $error){
            return $error->getMessage();
        }
    }

    public function getAllMovies(){
        try{
            $query = $this->db->prepare("SELECT * FROM movies");
            $query->execute();
            return $query->getAllMovies();

        } catch(Exception $error){
            return $error->getMessage();
        }
    }

    public function getMovieById(int $id){
        try{
            $query = $this->db->prepare("SELECT * FROM movies WHERE id=?");
            $query->execute([$id]);
            return $stm->getAllMovies();

        } catch(Exception $error){
            return $error->getMessage();
        }
    }

    public function updateMovie(string $title, int $year, string $image, int $id){
        try{
            $query = $this->db->prepare("UPDATE movies SET title=?, year=?, image=? WHERE id=?");
            $query->execute([$title, $year, $image, $id]);
            echo "<script>alert('Movie updated successfully!'); document.location='index.php'</script>";

        } catch(Exception $error){
            return $error->getMessage();
        }
    }

    public function deleteMovie(int $id){
        try{
            $query = $this->db->prepare("DELETE FROM movies WHERE id=?");
            $query->execute([$id]);
            echo "<script>alert('Movie deleted successfully'); document.location='index.php'</script>";
            return $query->getAllMovies(); 

        } catch(Exception $error){
            return $error->getMessage();
        }
    }
}
?> 