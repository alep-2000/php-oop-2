<?php 
    class Games extends Articles{
        public $characteristics;
        public $size;

        function __construct($image, $name, $type, $prize, $characteristics, $size){
            parent::__construct($image, $name, $type, $prize);
            $this->characteristics = $characteristics;
            $this->size = $size;
        }
    }

$kong = new Games("https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg", "Kong Classic", "Dog", "13,49", "Galleggia e rimbalza", "8,5 cm x 10 cm");

$trixie = new Games("https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg", "Topini di peluche Trixie", "Cat", "4,99", "Morbido con codina in corda", "8,5 cm x 10 cm");
?>