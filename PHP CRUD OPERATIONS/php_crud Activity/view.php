<!DOCTYPE html>
<?php session_start(); ?>
<head>
    <title>CAR RENTAL RECORD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
    <style>
         body {
            background: linear-gradient(rgba(255, 255, 255, 0.8), rgba(0, 0, 0, 0.8));
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            color: #333;
        }
        .custom-table {
            border-width: 3px;
            border-color: white;
        }
        .custom-table th,.custom-table td {
            border-color: white !important; 
            border-width: 3px !important; 
        }

        button {
            width: 70%;
            background-color: #337ab7;
            color: #fff;
            padding: 15px;
            border: none;
            cursor: pointer;
            border-radius: 10px;
        }

        button:hover {
            background-color: #23527c;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center ">
                <h1>Car Rental Records</h1>
                <?php
                    if(isset($_SESSION['status']) && $_SESSION != ''){
                        echo $_SESSION['status'];
                        echo "<br><br>";
                        unset($_SESSION['status']);
                    }
                ?>
                <table class="table table-bordered custom-table">
                    <thead>
                        <tr>
                            <th style="text-align: center;">Car ID</th>
                            <th style="text-align: center;">Brand</th>
                            <th style="text-align: center;">Model</th>
                            <th style="text-align: center;">Owner</th>
                            <th style="text-align: center;">Photo</th>
                            <th style="text-align: center;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php viewAll();?>
                    </tbody>
                </table>
                <form action="insert.php" method="POST">
                    <button type="submit" name="add_record" style="font-size: 18px; color: white;">Add New Record</button>
                </form>
            </div>
        </div>
    </div>
</body>


<?php
    function viewAll(){
        include("includes/sqlconnection.php");
        $sql = "SELECT * FROM studinfo order by id";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "
                    <tr>
                        <td>$row[id]</td>
                        <td>$row[fullname]</td>
                        <td>$row[contact]</td>
                        <td>$row[email]</td>
                        <td><img src = 'uploads/$row[pic]' width = '120' height = '75' alt = 'row[pic]>'</td>
                        <td>
                            <a href='edit.php?id=$row[id]' class='btn btn-info'>Edit</a>
                            <a href='controller.php?id=$row[id]&pic=[pic]' class='btn btn-danger'>Delete</a>
                        </td>
                    </tr>
                ";
            }
        }
        else{
            echo "
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            ";
        }
        $conn->close();
    }   
?>