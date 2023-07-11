<?php 
    class Food extends Articles{
        public $netWeight;
        public $ingredients;

        function __construct($image, $name, $type, $prize, $netWeight, $ingredients){
            parent::__construct($image, $name, $type, $prize);
            $this->netWeight = $netWeight;
            $this->ingredients = $ingredients;
        }
    }
?>