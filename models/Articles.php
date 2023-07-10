<?php 
    class Articles {
        public $image;
        public $name;
        public $type;
        public $prize;
        
        function __construct($image, $name, $type, $prize){
            $this->image = $image;
            $this->name = $name;
            $this->type = $type;
            $this->prize = $prize;
        }
    }


$article = new Articles("https://arcaplanet.vtexassets.com/arquivos/ids/243820/royal-canin-size-cane-mini-adult.jpg", "Royal Canin Mini Adult", "Dog", "43,99");


?>