<html>
    <head>
        <link href='css/style.css' type='text/css' rel='stylesheet'>
    </head>
    <body>
        <img src="images/logo.png">
        <h1> Simple Gallery E-commerce</h1><br>
            <a href=index.php>home</a>
            <a href=index.php>about</a>
            <a href=index.php>contact</a>               
            <hr>
        <?php
            error_reporting(E_WARNING);
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

            $id = $_GET['id'];
            $selected_product = $products[$id];

            if (count($selected_product) > 0){?>
                
            <?php }     
        ?>
        
        <form action='preview.php' method='$_GET'>
            <div >
                <img src='<?=$products[$id]['image']; ?>' length='400' width='300'><br>
                <?= $products[$id]['name']; ?> : get by <?= $products[$id]['price']; ?><br>
                <input type='text' name='fname' placeholder='first name' required='required'></input><br>
                <input type='text' name='lname' placeholder='last name' required='required'></input><br>
                <input type='email' name='email' placeholder='your email' required='required'></input><br>                          
                <input type='text' name='card' placeholder='card number' required='required'></input><br>
                <button>submit</button>
            </div>
            
        </form>
    </body>
</html>