<?php 
    require_once __DIR__ ."/Models/Articles.php";
    require_once __DIR__ ."/Models/Food.php";
    require_once __DIR__ ."/Models/Accessory.php";
    require_once __DIR__ ."/Models/Game.php";

    $products = [
        new Food("https://m.media-amazon.com/images/I/51MaQzo2JNL._AC_UF894,1000_QL80_.jpg", "Royal Canin Mini Adult", "Dog", "43,99", "545", "prosciutto,riso"),
        new Food("https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg", "Almo Nature Holistic <br/> Maintenance Medium Large <br/> Tonno e Riso", "Cat", "34,99", "400", "tonno, pollo, prosciutto"),
        new Food("https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg", "Almo Nature Cat Daily Lattina", "Dog", "44,99", "600", "manzo,cereali"),
        new Food("https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg", "Mangime per Pesci Guppy in <br/> Fiocchi", "Fish", "2,95", "30", "Pesci e sottoprodotti dei pesci, Cereali, <br/> Lieviti, Alghe"),
        new Accessory("https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg", "Voliera Wilma in Legno", "Bird", "184,99", "Legno", "M: L 83 x P 67 x H 153"),
        new Accessory("https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg", "Cartucce Filtranti per Filtro <br/> EasyCrystal", "Fish", "2,29", "Materiale espanso", "ND" ),
        new Game("https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg", "Kong Classic", "Dog", "13,49", "Galleggia e rimbalza", "8,5 cm x 10 cm"),
        new Game("https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg", "Topini di peluche Trixie", "Cat", "4,99", "Morbido con codina in corda", "8,5 cm x 10 cm")
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolshop</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <header class="bg-primary d-flex justify-content-center align-items-center">
        <h1>Boolshop</h1>
    </header>
    <div class="container">
        <div class="row">
            <?php foreach($products as $product): ?>
            <div class="col-4">
                <div class="card mt-3 me-3 mb-3 text-center p-2">
                    <img class="size" src="<?php echo $product->image?>">
                    <h3><?php echo $product->name ?></h3>
                    <p><?php echo $product->type ?></p>
                    <p><?php echo "Prize:" ." " .$product->prize ."€" ?></p>
                    <?php if(get_class($product) === 'Food'){ ?>
                    <p><?php echo "Net Weight:" ." " .$product->netWeight ?></p>
                    <p><?php echo "Ingredients:" ." " .$product->ingredients ?></p>
                    <?php } ?>
                    <?php if(get_class($product) === 'Accessory'){ ?>
                    <p><?php echo "Materials:" ." " .$product->materials ?></p>
                    <p><?php echo "Size:" ." " .$product->size ?></p>
                    <?php } ?>
                    <?php if(get_class($product) === 'Game'){ ?>
                    <p><?php echo "Characteristics:" ." " .$product->characteristics ?></p>
                    <p><?php echo "Size:" ." " .$product->size ?></p>
                    <?php } ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>