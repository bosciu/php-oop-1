<?php
    class Movie{
        public $title;
        private $rating;
        public $language;
        public $description;
        public $url = "https://poloniami.pl/wp-content/uploads/2018/03/films.jpg";
        public $cast;
        
        function __construct($title, $rating,$language, $description, $cast = []){
            $this->title = $title;
            $this->rating = $rating;
            $this->language = $language;
            $this->description = $description;
            $this->cast = $cast;
        }

        public function getRating(){
            for($i = 0; $i<$this->rating; $i++){
                echo '<i class="fas fa-star"></i>';
            }
            for($i = 0; $i<(5 - $this->rating); $i++)
                echo '<i class="far fa-star"></i>';
        }
    };