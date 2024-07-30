<html>
    <head>
        <title>PHP POST demo</title>
    </head>

    <body>
       <?php
        $print = $_POST['fname']; 
        echo "Text successfully transfered using POST: " .$print;
       ?>
    </body>
</html>