<html>
<head>
	<link rel = "stylesheet" href = "css/bootstrap.min.css">
        <script src = "js/jquery.js"></script>
         <script src = "js/bootstrap.js"></script>
    <title>Activity 4</title>
</head>

<?php
    /*
    <nav class="navbar navbar-default">
    <nav class="navbar navbar-inverse">
    <nav class="navbar navbar-inverse navbar-fixed-bottom">
    <nav class="navbar navbar-inverse navbar-fixed-top">
    */
?>



<body>
    <h1>Activity 4</h1>

<div class="container">
    <div class="page-header">
        <h1>Form Validation Style</h1>
    </div>
    <form class="form-inline">
        <div class="form-group">
            <label>Name</label>
            <input type="text" disabled class="form-control">
        </div>

        <div class="form-group has-feedback has-warning">
            <label>Email</label>
            <input type="text" class="form-control"><span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback has-success">
            <label>Password</label>
            <input type="text" class="form-control"><span class="glyphicon glyphicon-ok form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback has-error">
            <label>Confirm password</label>
            <input type="text" class="form-control"><span class="glyphicon glyphicon-remove form-control-feedback"></span>
        </div>
    </form>

    
    <div class="page-header">
        <h1>Form Validation Style</h1>
    </div>
    <form>
        <div class="form-group">
            <label>Name</label>
            <input type="text" disabled class="form-control">
        </div>

        <div class="form-group has-feedback has-warning">
            <label>Email</label>
            <input type="text" class="form-control" placeholder="Already taken"><span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback has-success">
            <label>Password</label>
            <input type="text" class="form-control" placeholder="Strong password"><span class="glyphicon glyphicon-ok form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback has-error">
            <label>Confirm password</label>
            <input type="text" class="form-control" placeholder="Does not match"><span class="glyphicon glyphicon-remove form-control-feedback"></span>
        </div>
    </form>

</div>


<br>
<br>
<br>
<hr/>

<div class="container">
    <div class="page-header">
        <h1>MY FORM Horizontal</h1>
    </div>
    <form class="form-horizontal">
        <div class="form-group">
            <label for="name" class="control-label col-md-2">Enter your name</label>
            <div class="col-md-10">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="control-label col-md-2">Enter your email</label>
            <div class="col-md-10">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="control-label col-md-2">Enter your Password</label>
            <div class="col-md-10">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="comment" class="control-label col-md-2">Comment</label>
            <div class="col-md-10">
                <textarea class="form-control" rows="10"></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2">Skills</label>
            <div class="col-md-10">
                <div class="checkbox">
                    <label for="">
                        <input type="checkbox">PHP</label>
                </div>
                <div class="checkbox">
                    <label for="">
                        <input type="checkbox">BOOTSTRAP</label>
                </div>
                <div class="checkbox">
                    <label for="">
                        <input type="checkbox">JAVA</label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2">Skills</label>
            <div class="col-md-10">
                <div class="checkbox">
                    <label class="checkbox-inline"><input type="checkbox">PHP</label>
                    <label class="checkbox-inline"><input type="checkbox">BOOTSTRAP</label>
                    <label class="checkbox-inline"><input type="checkbox">JAVA</label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2">Gender</label>
            <div class="col-md-10">
                <div class="radio">
                    <label><input type="radio" name="gender">Male</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="gender">Female</label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2">Gender</label>
            <div class="col-md-10">
                <div class="radio">
                    <label class="radio-inline"><input type="radio" name="gender">Male</label>
                    <label class="radio-inline"><input type="radio" name="gender">Female</label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label">Course</label>
            <div class="col-md-10">
                <select class="form-control">
                    <option value="">BSCS</option>
                    <option value="">BSIT</option>
                    <option value="">BSIS</option>
                    <option value="">BSEMC</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <button class="btn btn-success btn-block">Click to submit</button>
            </div>
        </div>


    </form>

    <div class="page-header">
        <h1>MY FORM Horizontal</h1>
    </div>
    <form class="form-horizontal">
        <div class="form-group">
            <label for="name" class="control-label col-md-2">Enter your name</label>
            <div class="col-md-10">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="control-label col-md-2">Enter your email</label>
            <div class="col-md-10">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="control-label col-md-2">Enter your Password</label>
            <div class="col-md-10">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="control-label col-md-2">Confirm password</label>
            <div class="col-md-10">
                <input type="text" class="form-control">
            </div>
        </div>
    </form>
</div>

<div class="container">
    <div class="page-header">
        <h1>MY FORM DESIGN2</h1>
    </div>
    <form class="form-inline">
        <div class="form-group">
            <label for="name">Enter your name</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Enter your email</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Enter your password</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Confirm your password</label>
            <input type="text" class="form-control">
        </div>
    </form>
</div>

<div class="container">
    <div class="page-header">
        <h1>MY FORM DESIGN</h1>
    </div>
    <form class="col-md-8">
        <div class="form-group">
            <label for="name">Enter your name</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Enter your email</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Enter your password</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Confirm your password</label>
            <input type="text" class="form-control">
        </div>
    </form>
</div>


<br>
<br>
<br>
<hr/>

<div class="container-fluid">
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">College</a>
            </div>
            <div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">CCS</a></li>
                    <li><a href="#">CET</a></li>
                    <li class="active"><a href="#">CBA</a></li>
                    <li><a href="#">CAS</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
    
</body>
</html>