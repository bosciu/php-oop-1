<?php
    class Movie{
        public $title;
        public $rating;
        public $language;
        public $description;
        public $cast;
        
        function __construct($title, $rating,$language, $description, $cast = []){
            $this->title = $title;
            $this->rating = $rating;
            $this->language = $language;
            $this->description = $description;
            $this->cast = $cast;
        }

        public function prova(){
            
        }
    };