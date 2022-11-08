<html>
    <head>
        <link href='css/style.css' type='text/css' rel='stylesheet'>
        <meta charset='utf-8'>
          <!-- CSS only -->
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </head>
    <body>
        <img src="images/logo.png" length='200px' widht='150px'>
        <h1> Simple Gallery E-commerce</h1><br>
        <nav class="navbar navbar-expand-sm bg-light">
            <div class="container-fluid">
                <!-- Links -->
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ndex.php">contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ndex.php">about</a>
                </li>
                </ul>
            </div>
        </nav>
  
        <hr>
        <?php
            $products = array(
                [
                    'name' => 'shoe',
                     'image' => 'images/shoe.png',
                    'price' => '45,000/- Tsh'
                ],
                [
                    'name' => 'chair',
                    'image' => 'images/chair.png',
                    'price' => '250,000/- Tsh'
                ],
                [
                    'name' => 'laptop',
                    'image' => 'images/laptop.png',
                    'price' => '400,000/- Tsh'
                ],
                [
                    'name' => 'sofa',
                    'image' => 'images/sofa.png',
                    'price' => '200,000/- Tsh'
                ],
                [
                    'name' => 'watch',
                    'image' => 'images/watch.png',
                    'price' => '150,000/- Tsh'
                ],
                [
                    'name' => 'table',
                    'image' => 'images/table.png',
                    'price' => '300,000/- Tsh'
                ]
            );

            $name=$_GET['name'];
            $image=$_GET['image'];
            $price=$_GET['price'];
            
        ?>
        <div class='row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3'>
            <?php           
                if(count($products) > 0 ){
                    
                    for($i = 0; $i < count($products); $i++){ ?>
                    
                    
                        <div class='col'>
                            <div class='card'>
                                <img src='<?=$products[$i]['image']; ?>' length='200' width='150' /><br>
                                <?= $products[$i]['name']; ?><br>
                                the price is <?= $products[$i]['price'] ?><br>
                                <a href='view.php?id=<?=$i; ?>'><button type='botton' class='btn btn-primary'>order now</button></a><br>
                            </div>
                        </div>        
                    <?php }
                }
                $products=$_GET='view.php?'
            ?>
        </div>  
        <hr>
        <footer> have a good day</footer>
    </body>
</html>