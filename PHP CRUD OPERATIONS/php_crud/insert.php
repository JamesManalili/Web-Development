<!DOCTYPE html>
<html>
<head>
    <title>Student Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Add New Student</h1>
        
        <form class="form-horizontal" action="controller.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="txtname" class="col-sm-2 control-label">Student Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtname" name="txtname">
                </div>
            </div>
            
            <div class="form-group">
                <label for="txtcontact" class="col-sm-2 control-label">Contact Number:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtcontact" name="txtcontact">
                </div>
            </div>
            
            <div class="form-group">
                <label for="txtemail" class="col-sm-2 control-label">Email:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtemail" name="txtemail">
                </div>
            </div>
            
            <div class="form-group">
                <label for="txtpic" class="col-sm-2 control-label">Image:</label>
                <div class="col-sm-10">
                    <input type="file" id="txtpic" name="txtpic">
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary" name="save_record">Save Record</button>
                </div>
            </div>
        </form>
    </div>
    
    
</body>
</html>