<?php

require_once("../connection/database.php");

class MovieRepository{
    private $id;
    private $title;
    private $year;
    private $image;
    protected $db;

    public function __construct($id=0, $title="", $year=0, $image=""){
        $this->id = $id;
        $this->title = $title;
        $this->year = $year;
        $this->image = $image;
        $this->db = new PDO(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PWD,[ PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ]);
    }

    public function setId($id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }

    public function setTitle($title){
        $this->$title = $title;
    }
    public function getTitle(){
        return $this->title;
    }

    public function setYear($year){
        $this->year = $year;
    }
    public function getYear(){
        return $this->year;
    }

    public function setImage($image){
        $this->image = $image;
    }
    public function getImage(){
        return $this->image;
    }

    public function createMovie(){
        try{
            $query = $this->db->prepare("INSERT INTO movies(title, year, image) values(?,?,?)");
            $query->execute([$this->title, $this->year, $this->image]);
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

    public function getMovieById(){
        try{
            $query = $this->db->prepare("SELECT * FROM movies WHERE id=?");
            $query->execute([$this->id]);
            return $stm->getAllMovies();

        } catch(Exception $error){
            return $error->getMessage();
        }
    }

    public function updateMovie(){
        try{
            $query = $this->db->prepare("UPDATE movies SET title=?, year=?, image=? WHERE id=?");
            $query->execute([$this->title, $this->year, $this->image, $this->id]);
            echo "<script>alert('Movie updated successfully!'); document.location='index.php'</script>";

        } catch(Exception $error){
            return $error->getMessage();
        }
    }

    public function delete(){
        try{
            $query = $this->db->prepare("DELETE FROM movies WHERE id=?");
            $query->execute([$this->id]);
            echo "<script>alert('Movie deleted successfully'); document.location='index.php'</script>";
            return $query->getAllMovies(); 

        } catch(Exception $error){
            return $error->getMessage();
        }
    }
}
?> 