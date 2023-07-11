<?php 
    class Accessory extends Articles{
        public $materials;
        public $size;

        function __construct($image, $name, $type, $prize, $materials, $size){
            parent::__construct($image, $name, $type, $prize);
            $this->materials = $materials;
            $this->size = $size;
        }
    }

?>