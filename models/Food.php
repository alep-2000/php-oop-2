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

$royal = new Food("https://m.media-amazon.com/images/I/51MaQzo2JNL._AC_UF894,1000_QL80_.jpg", "Royal Canin Mini Adult", "Dog", "43,99", "545", "prosciutto,riso");

$almo = new Food("https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg", "Almo Nature Holistic <br/> Maintenance Medium Large <br/> Tonno e Riso", "Cat", "34,99", "400", "tonno, pollo, prosciutto");

$nature = new Food("https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg", "Almo Nature Cat Daily Lattina", "Dog", "44,99", "600", "manzo,cereali");

$fish = new Food("https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg", "Mangime per Pesci Guppy in <br/> Fiocchi", "Fish", "2,95", "30", "Pesci e sottoprodotti dei pesci, Cereali, <br/> Lieviti, Alghe");
?>