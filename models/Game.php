<?php 
    class Game extends Articles{
        public $characteristics;
        public $size;

        function __construct($image, $name, $type, $prize, $characteristics, $size){
            parent::__construct($image, $name, $type, $prize);
            $this->characteristics = $characteristics;
            $this->size = $size;
        }
    }
?>