<html>
    <head>
        <title>PHP GET from ink</title>
    </head>

    <body>
        <?php
            if ($_GET){
                echo "Items: ".$_GET['item'] .'<br>';
                echo "Qunatity: ".$_GET['quantity'];
            }
            else{
                echo "<a href='get_link.php?item=book&quantity=100'>submit</a>";
            }
        ?>
    </body>
</html>