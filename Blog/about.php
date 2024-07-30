<!DOCTYPE html>
<html lang="en">
<head>
        <title>Blog</title>
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
      <div class = "page-header">
        <h1 class = "text-center">About Us</h1>
      </div>
        <div class = "col-md-8 col-md-offset-2">  

                <p class = "lead m-col" >Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown 
                printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, 
                but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with 
                the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                 like Aldus PageMaker including versions of Lorem Ipsum.</p>
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