<?php 
    require_once __DIR__ ."/models/Articles.php";
    require_once __DIR__ ."/models/Food.php";
    require_once __DIR__ ."/models/Accessories.php";
    require_once __DIR__ ."/models/Games.php";

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
            <div class="col-4">
                <div class="card mt-3 me-3 mb-3 text-center p-2">
                    <img class="size" src="<?php echo $royal->image?>">
                    <h3><?php echo $royal->name ?></h3>
                    <p><?php echo $royal->type ?></p>
                    <p><?php echo "Prize:" ." " .$royal->prize ."€" ?></p>
                    <p><?php echo "Net Weight:" ." " .$royal->netWeight ?></p>
                    <p><?php echo "Ingredients:" ." " .$royal->ingredients ?></p>
                </div>
            </div>
            <div class="col-4">        
                <div class="card mt-3 me-3 mb-3 text-center margin p-2">
                    <img src="<?php echo $almo->image?>">
                    <h3><?php echo $almo->name ?></h3>
                    <p><?php echo $almo->type ?></p>
                    <p><?php echo "Prize:" ." " .$almo->prize ."€" ?></p>
                    <p><?php echo "Net Weight:" ." " .$almo->netWeight ?></p>
                    <p><?php echo "Ingredients:" ." " .$almo->ingredients ?></p>
                </div>
            </div>
            <div class="col-4">        
                <div class="card mt-3 mb-3 text-center margin p-2">
                    <img src="<?php echo $nature->image?>">
                    <h3><?php echo $nature->name ?></h3>
                    <p><?php echo $nature->type ?></p>
                    <p><?php echo "Prize:" ." " .$nature->prize ."€" ?></p>
                    <p><?php echo "Net Weight:" ." " .$nature->netWeight ?></p>
                    <p><?php echo "Ingredients:" ." " .$nature->ingredients ?></p>
                </div>
            </div>
            <div class="col-4">        
                <div class="card mt-3 mb-3 text-center margin p-2">
                    <img src="<?php echo $fish->image?>">
                    <h3><?php echo $fish->name ?></h3>
                    <p><?php echo $fish->type ?></p>
                    <p><?php echo "Prize:" ." " .$fish->prize ."€" ?></p>
                    <p><?php echo "Net Weight:" ." " .$fish->netWeight ?></p>
                    <p><?php echo "Ingredients:" ." " .$fish->ingredients ?></p>
                </div>
            </div>
            <div class="col-4">        
                <div class="card mt-3 mb-3 text-center margin p-2">
                    <img src="<?php echo $voliera->image?>">
                    <h3><?php echo $voliera->name ?></h3>
                    <p><?php echo $voliera->type ?></p>
                    <p><?php echo "Prize:" ." " .$voliera->prize ."€" ?></p>
                    <p><?php echo "Materials:" ." " .$voliera->materials ?></p>
                    <p><?php echo "Size:" ." " .$voliera->size ?></p>
                </div>
            </div>
            <div class="col-4">        
                <div class="card mt-3 mb-3 text-center margin p-2">
                    <img src="<?php echo $easy->image?>">
                    <h3><?php echo $easy->name ?></h3>
                    <p><?php echo $easy->type ?></p>
                    <p><?php echo "Prize:" ." " .$easy->prize ."€" ?></p>
                    <p><?php echo "Materials:" ." " .$easy->materials ?></p>
                    <p><?php echo "Size:" ." " .$easy->size ?></p>
                </div>
            </div>
            <div class="col-4">        
                <div class="card mt-3 mb-3 text-center margin p-2">
                    <img src="<?php echo $kong->image?>">
                    <h3><?php echo $kong->name ?></h3>
                    <p><?php echo $kong->type ?></p>
                    <p><?php echo "Prize:" ." " .$kong->prize ."€" ?></p>
                    <p><?php echo "Characteristics:" ." " .$kong->characteristics ?></p>
                    <p><?php echo "Size:" ." " .$kong->size ?></p>
                </div>
            </div>
            <div class="col-4">        
                <div class="card mt-3 mb-3 text-center margin p-2">
                    <img src="<?php echo $trixie->image?>">
                    <h3><?php echo $trixie->name ?></h3>
                    <p><?php echo $trixie->type ?></p>
                    <p><?php echo "Prize:" ." " .$trixie->prize ."€" ?></p>
                    <p><?php echo "Characteristics:" ." " .$trixie->characteristics ?></p>
                    <p><?php echo "Size:" ." " .$trixie->size ?></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>