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
?>