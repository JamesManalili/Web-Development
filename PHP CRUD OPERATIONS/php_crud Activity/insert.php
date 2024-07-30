<!DOCTYPE html>
<html>
<head>
    <title>CAR RENTAL RECORD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style>
        .background-gradient {
            background: linear-gradient(rgba(255, 255, 255, 0.8), rgba(0, 0, 0, 0.8));
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            color: #333;
        }
        .form-button {
            width: 15%;
            background-color: #337ab7;
            color: #fff;
            padding: 8px;
            border: none;
            cursor: pointer;
            border-radius: 3px;
        }

        .form-button:hover {
            background-color: #23527c;
        }
    </style>
</head>
<body class="background-gradient">
    <div class="container">
       <br>
       <h1 class="text-center" style="font-weight: bold;">ADD NEW CAR RECORD</h1>
       <br><br>
        
        <form class="form-horizontal" action="controller.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="txtname" class="col-sm-4 control-label" style="font-size: 18px; color: black;">Brand:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="txtname" name="txtname">
                </div>
            </div>
            
            <div class="form-group">
                <label for="txtcontact" class="col-sm-4 control-label" style="font-size: 18px; color: black;">Model:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="txtcontact" name="txtcontact">
                </div>
            </div>
            
            <div class="form-group">
                <label for="txtemail" class="col-sm-4 control-label" style="font-size: 18px; color: black;">Owner:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="txtemail" name="txtemail">
                </div>
            </div>
            
            <div class="form-group">
                <label for="txtpic" class="col-sm-4 control-label" style="font-size: 18px; color: black;">Image:</label>
                <div class="col-sm-5">
                    <input type="file" id="txtpic" name="txtpic" style="font-size: 19px; color: white;">
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-10">
                    <button type="submit" name="save_record" class="form-button">Save Record</button>
                </div>
            </div>
        </form>
    </div>
    
    
</body>
</html>
