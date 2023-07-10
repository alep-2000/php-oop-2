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

$food = new Food("https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg", "Almo Nature Holistic Maintenance Medium Large Tonno e Riso", "Dog", "44,99", "600", "manzo,cereali");
?>