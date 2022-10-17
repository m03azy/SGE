<html>
    <head>
        <link href='css/style.css' type='text/css' rel='stylesheet'>
    </head>
    <body>
        <img src="images/logo.png" length='200px' widht='150px'>
        <h1> Simple Gallery E-commerce</h1><br>
            
                <a href=index.php>home</a>
                <a href=index.php>about</a>
                <a href=index.php>contacts</a>
               
            
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
        <?php           
            if(count($products) > 0 ){
                 for($i = 0; $i < count($products); $i++){ ?>
                
                 <div class='row'>
                    <img src='<?=$products[$i]['image']; ?>' length='200' width='150' /><br>
                    <?= $products[$i]['name']; ?><br>
                    the price is <?= $products[$i]['price'] ?><br>
                    <a href='view.php?id=<?=$i; ?>'><button>order now</button></a><br>
                 </div>
                <?php }
            }
            $products=$_GET='view.php?'
        ?>
        <hr>
        <footer> have a good day</footer>
    </body>
</html>