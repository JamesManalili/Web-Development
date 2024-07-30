<!DOCTYPE html>
<html lang="en">
<head>
        <title>The Blog</title>
        <link rel = "stylesheet" href = "css/bootstrap.min.css">
        <link rel = "stylesheet" href = "css/style.css">
        <script src = "js/jquery.js"></script>
        <script src = "js/bootstrap.js"></script>
</head>
<body>
    <nav class = "navbar navbar-custom">
            <div class = "container">
                <div class = "navbar-header">
                   <a class = "navbar-brand" href="#">THE BLOG</a>
                </div>
                <div class = "nav navbar-nav form-inline navbar-right" style = "padding: 10px">
                    <div class = "input-group">
                        <input type = "text" class = "form-control">
                        <div class = "input-group-btn">
                            <button class = "btn btn-default"><li class = "glyphicon glyphicon-search"></li></button>
                        </div>
                    </div>
                </div>

                <ul class = "nav navbar-nav navbar-right">
                   <li><a href="index.php">Home</a></li>
                   <li><a href="about.php">About us</a></li>
                   <li><a href="post.php">Post</a></li>
                   <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
    </nav>
    <header style = "background: url(img/5.jpg);"> 
        <div class = "text-center">
            <h1>The Blog</h1>
            <div class = "lead">Welcome to my Blog</div>
        </div>
    </header>

    <div class = "row">
        <div class = "col-md-8 col-md-offset-2">    
            <div id = "post">
                <h1><a href="#">My First Program</a></h1>
                <p class = "lead">This is my First program using Java</p>
                <p>05-April-2024</p>
            </div>

             <div id = "post">
                <h1><a href="#">My First Program</a></h1>
                <p class = "lead">This is my First program using Java</p>
                <p>05-April-2024</p>
            </div>

             <div id = "post">
                <h1><a href="#">My First Program</a></h1>
                <p class = "lead">This is my First program using Java</p>
                <p>05-April-2024</p>
            </div>

             <div id = "post">
                <h1><a href="#">My First Program</a></h1>
                <p class = "lead">This is my First program using Java</p>
                <p>05-April-2024</p>
            </div>

             <div id = "post">
                <h1><a href="#">My First Program</a></h1>
                <p class = "lead">This is my First program using Java</p>
                <p>05-April-2024</p>
            </div> 
            <div class = "down-btn text-right">
                <button class = "btn btn-default btn-lg">Older Post</button>
            </div>
        </div>
    </div>

    <div class = "container-fluid">
        <ul class = "nav navbar-nav nav-mycenter">
            <li><a href="#">Home</a></li>
            <li><a href="#">Technology</a></li>
            <li><a href="#">Health</a></li>
            <li><a href="#">Science</a></li>
            <li><a href="#">Nature</a></li>
        </ul>
    </div>

</body>
</html>