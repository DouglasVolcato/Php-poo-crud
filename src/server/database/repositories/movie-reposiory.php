<?php

require_once("./src/server/database/connection/database-connection.php");

class MovieRepository{
    protected $db;

    public function __construct(){
        $this->db = new PDO(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PWD,[ PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ]);
    }

    public function createMovie(string $title, int $year, string $image){
        try{
            $query = $this->db->prepare("INSERT INTO movies(title, year, image) values(?,?,?)");
            $query->execute([$title, $year, $image]);
            return true;

        } catch(Exception){
            return false;
        }
    }

    public function getAllMovies(){
        try{
            $query = $this->db->prepare("SELECT * FROM movies");
            $query->execute();
            return $query->fetchAll();

        } catch(Exception){
            return [];
        }
    }

    public function getMovieById(int $id){
        try{
            $query = $this->db->prepare("SELECT * FROM movies WHERE id=?");
            $query->execute([$id]);
            return $query->fetchAll();

        } catch(Exception){
            return null;
        }
    }

    public function updateMovie(string $title, int $year, string $image, int $id){
        try{
            $query = $this->db->prepare("UPDATE movies SET title=?, year=?, image=? WHERE id=?");
            $query->execute([$title, $year, $image, $id]);
            return true;

        } catch(Exception){
            return false;
        }
    }

    public function deleteMovie(int $id){
        try{
            $query = $this->db->prepare("DELETE FROM movies WHERE id=?");
            $query->execute([$id]);
            return true;

        } catch(Exception){
            return false;
        }
    }
}
?> 