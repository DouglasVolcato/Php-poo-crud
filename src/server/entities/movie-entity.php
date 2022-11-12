<?php
class MovieEntity{
    private $title;
    private $year;
    private $image;

    public function __construct($title, $year, $image){
        $this->title = $title;
        $this->year = $year;
        $this->image = $image;
    }

    public function validate(){
        if(!$this->title){
            throw new Exception("Movie must have a title.");
        }
    }

    public function getMovie(){
        $movie = new stdClass;
        $movie->title = $this->title;
        $movie->year = $this->year ? $this->year : 0;
        $movie->image = $this->image ? $this->image : "";
        return $movie;
    }
};
?>