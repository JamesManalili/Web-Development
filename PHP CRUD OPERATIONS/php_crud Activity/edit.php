<!DOCTYPE html>
<html>
    <head>
        <title>CAR RECORD</title>
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
         <link rel="stylesheet" href="style.css">
    </head>
    
    <body>
        <div class="container">
            <h1>EDIT CAR RECORD</h1>
            
            <form action="controller.php" method="POST" enctype="multipart/form-data">
                <table>
                    <?php
                        getRecord($_GET['id']);
                    ?>                          
                </table>
                <button type="submit" name="update_record">Update Record</button>
            </form>
        </div>
    </body>
</html>

<?php
    function getRecord($recno){
           include("includes/sqlconnection.php");
           $sql = "SELECT * FROM studinfo WHERE id = $recno";
           $result = $conn->query($sql);

           if($result->num_rows >0){
            while($row = $result->fetch_assoc()){
                echo "
                    <tr>
                        <input type='hidden' name = 'txtid' value ='".$row['id']."'>
                        <th>Brand</th>
                        <td><input type='text' name='txtname' value='".$row['fullname']."'></td>
                        <td rowspan ='4'><img src='uploads/$row[pic]' width ='100' height = '75' alt='$row[pic]'></td>
                    </tr>

                    <tr>
                        <th>Model</th>
                        <td><input type='text' name = 'txtcontact' value = '".$row['contact']."'></td>
                    </tr>

                    <tr>
                        <th>Owner</th>
                        <td><input type='text' name = 'txtemail' value = '".$row['email']."'></td>
                    </tr>

                    <tr>
                        <th>Image</th>
                        <td><input type='file' name = 'txtpic'></td>
                        <input type='hidden' name='txtpic_old' value='".$row['pic']."'>
                    </tr>";
            }
           }else{
            echo "no record found";
           }
           $conn->close();
    }
?>