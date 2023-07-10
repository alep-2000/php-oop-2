<?php 
    class Accessories extends Articles{
        public $materials;
        public $size;

        function __construct($image, $name, $type, $prize, $materials, $size){
            parent::__construct($image, $name, $type, $prize);
            $this->materials = $materials;
            $this->size = $size;
        }
    }

$voliera = new Accessories("https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg", "Voliera Wilma in Legno", "Bird", "184,99", "Legno", "M: L 83 x P 67 x H 153");

$easy = new Accessories("https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg", "Cartucce Filtranti per Filtro <br/> EasyCrystal", "Fish", "2,29", "Materiale espanso", "ND" )
?>