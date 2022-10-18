<html>
    <head>
        <link href='css/style.css' rel='stylesheet' type='text/css'>
    <body>
    <?php
         ini_set('display_errors', 1);
         ini_set('display_startup_errors', 1);
         error_reporting(E_ALL);

            if(isset($_POST['submit'])){
                $firstname = 'first name:'. $_POST['fname'];
                $lastname ='last name:'. $_POST['fname'];
                $myfile = fopen('order.txt','a') or die('failure to open file');
                fwrite ($myfile, $firstname);
                fwrite ($myfile, $lastname);
                fclose($myfile);
            }
        ?>
    <img src="images/logo.png">
        <h1> Simple Gallery E-commerce</h1><br>
            <a href=index.php>home</a>
            <a href=index.php>about</a>
            <a href=index.php>contact</a>               
            <hr>
        dear <?php echo $_POST['fname']; ?>
        your payment have been taken through credit card <?= $_POST['card'];?>
        <hr>
        <footer> have a good day</footer>
    </body>
</html>