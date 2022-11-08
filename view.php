<html>
    <head>
        <link href='css/style.css' type='text/css' rel='stylesheet'>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </head>
    <body>
        
        <img src="images/logo.png">
        <h1> Simple Gallery E-commerce</h1><br>
            <a href=index.php>home</a>
            <a href=index.php>about</a>
            <a href=index.php>contact</a>               
            <hr>
        <?php
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
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
        
        <form action='preview.php' method='post'>
            <div class='comtainer-md'>
                <img src='<?=$products[$id]['image']; ?>' length='400' width='300'><br>
                <?= $products[$id]['name']; ?> : get by <?= $products[$id]['price']; ?><br>
                <input type='text' name='fname' placeholder='first name' required='required'></input><br>
                <input type='text' name='lname' placeholder='last name' required='required'></input><br>
                <input type='email' name='email' placeholder='your email' required='required'></input><br>                          
                <input type='text' name='card' placeholder='card number' required='required'></input><br>
                <button name='submit' type='submit'>submit</button>
            </div>     
        </form>
    
    </body>
</html>