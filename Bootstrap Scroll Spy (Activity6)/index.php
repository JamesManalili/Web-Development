<!DOCTYPE html>
<html lang="en">
<head>
         <title>Activity 6 Scroll Spy</title>
        <link rel = "stylesheet" href = "css/bootstrap.min.css">
        <script src = "js/jquery.js"></script>
        <script src = "js/bootstrap.js"></script>
        <style>
                section{
                   width: 100vw;
                   height: 100vw;
                   padding-top: 50px;     
                }
                h1{
                   padding: 0;
                   margin: 0;
                }
        </style>


</head>
<body data-spy = "scroll" data-target=".navbar">
        <nav class = "navbar navbar-default navbar-fixed-top">
                <ul class = "nav navbar-nav">
                    <li><a href="#Home">Home</a></li>
                    <li><a href="#About">About us</a></li>
                    <li><a href="#Product">Products</a></li>
                    <li><a href="#Contact">Contact us</a></li>
                </ul>
        </nav>

        <nav class = "navbar navbar-inverse navbar-fixed-bottom">
                <ul class = "nav navbar-nav">
                    <li><a href="#Home">Home</a></li>
                    <li><a href="#About">About us</a></li>
                    <li><a href="#Product">Products</a></li>
                    <li><a href="#Contact">Contact us</a></li>
                </ul>
        </nav>


        <section id = "Home" style = "background: green;">
                <h1>Home</h1>
        </section>
        <section id = "About" style = "background: blue;"> 
                <h1>About us</h1>
        </section>
        <section id = "Product" style = "background: red;">
                <h1>Products</h1>
        </section>
        <section id = "Contact" style = "background: gray;">
                <h1>Contact us</h1>
        </section>
</body>
</html>