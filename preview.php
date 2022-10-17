<html>
    <head>
        <link href='css/style.css' rel='stylesheet' type='text/css'>
    <body>
    <img src="images/logo.png">
        <h1> Simple Gallery E-commerce</h1><br>
            <a href=index.php>home</a>
            <a href=index.php>about</a>
            <a href=index.php>contact</a>               
            <hr>
        dear <?php echo $_GET['fname']; ?>
        your payment have been taken through credit card <?= $_GET['card'];?>
        <hr>
        <footer> have a good day</footer>
    </body>
</html>