<!DOCTYPE html>
<html lang="en">
<head>
         <title>E-commerce</title>
      <link rel = "stylesheet" href = "css/bootstrap.min.css">
      <script src = "js/jquery.js"></script>
      <script src = "js/bootstrap.js"></script>
</head>
<body>
        <nav class = "navbar navbar-inverse">
            <div class = "container-fluid">
                <div class = "navbar-header">
                    <button type = "button" class = "navbar-toggle" data-toggle = "collapse" data-target = "#myNavbar">
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
                    </button>
                    <a class = "navbar-brand" href="" >E-commorce</a>
                </div>

                <div class = "collapse navbar-collapse" id = "myNavbar">
                    <ul class = "nav navbar-nav navbar-right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">Software</a></li>
                        <li><a href="#">Music</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <aside class = "col-md-4">
            <div class = "col-md-10 col-md-offset-1">
                <div class = "list-group">
                    <a href="product.php" class = "list-group-item" style = "padding:0;margin:0;">
                        <div class = "col-md-3" style = "padding:0;margin:0;">
                           <img src="pics/1.jpg" style = "width:100px;height:100px;">
                        </div>
                        <div class = "col-md-9">
                            <div class = "list-group-item-heading">
                                <h4>Php: 5,000,000</h4>
                                <h4>Sports Bike</h4>
                                <div class = "clearfix"></div>
                            </div>
                            <p class = "list-group-item-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class = "clearfix"></div>
                    </a>
                </div>
            </div>

             <div class = "col-md-10 col-md-offset-1">
                <div class = "list-group">
                    <a href="product.php" class = "list-group-item" style = "padding:0;margin:0;">
                        <div class = "col-md-3" style = "padding:0;margin:0;">
                           <img src="pics/2.jpg" style = "width:100px;height:100px;">
                        </div>
                        <div class = "col-md-9">
                            <div class = "list-group-item-heading">
                                <h4>Php: 5,000,000</h4>
                                <h4>Sports Bike</h4>
                                <div class = "clearfix"></div>
                            </div>
                            <p class = "list-group-item-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class = "clearfix"></div>
                    </a>
                </div>
            </div>

             <div class = "col-md-10 col-md-offset-1">
                <div class = "list-group">
                    <a href="product.php" class = "list-group-item" style = "padding:0;margin:0;">
                        <div class = "col-md-3" style = "padding:0;margin:0;">
                           <img src="pics/3.jpg" style = "width:100px;height:100px;">
                        </div>
                        <div class = "col-md-9">
                            <div class = "list-group-item-heading">
                                <h4>Php: 5,000,000</h4>
                                <h4>Sports Bike</h4>
                                <div class = "clearfix"></div>
                            </div>
                            <p class = "list-group-item-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class = "clearfix"></div>
                    </a>
                </div>
            </div>

             <div class = "col-md-10 col-md-offset-1">
                <div class = "list-group">
                    <a href="product.php" class = "list-group-item" style = "padding:0;margin:0;">
                        <div class = "col-md-3" style = "padding:0;margin:0;">
                           <img src="pics/9.jpg" style = "width:100px;height:100px;">
                        </div>
                        <div class = "col-md-9">
                            <div class = "list-group-item-heading">
                                <h4>Php: 5,000,000</h4>
                                <h4>Sports Bike</h4>
                                <div class = "clearfix"></div>
                            </div>
                            <p class = "list-group-item-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class = "clearfix"></div>
                    </a>
                </div>
            </div>
        </aside>
        
      <header class = "col-md-8">
        <div class = "col-md-12">
          <div class = "thumbnail">
             <img src="pics/1.jpg" style = "width:100%">
             <div class = "caption">
                   <h4 class = "pull-right">Php: 5,000,000</h4>
                   <h4><a href="product.php">Sports Bike</a></h4>
                   <div><button class = "btn btn-primary" data-target = "#buy_me" data-toggle = "modal" style="margin-left:0px; margin-bottom:10px;">Buy this car</button></div>
                   <div class = "modal fade" id = "buy_me">
                        <div class = "modal-dialog">
                            <div class = "modal-content">
                                <div class = "modal-header">
                                    <button class ="close" data-dismiss="modal">&times;</button>
                                    <h2 class = "modal-title">Buy Bikes</h2>
                                </div>
                                <div class = "modal-body">
                                    <form>
                                        <div class = "form-group">
                                            <input type="text" class = "form-control input-lg" placeholder = "Enter Your Name">
                                        </div>

                                         <div class = "form-group">
                                            <input type="email" class = "form-control input-lg" placeholder = "Enter Your Email">
                                        </div>
                                        
                                         <div class = "form-group">
                                            <input type="text" class = "form-control input-lg" placeholder = "Contact Number">
                                        </div>

                                         <div class = "form-group">
                                           <textarea class = "form-control" rows="5" style = "fonr-size:20px color:gray;">Address....</textarea>
                                        </div>

                                    </form>
                                </div>
                                <div class = "modal-footer">
                                    <button class = "btn btn-danger" data-dismiss="modal">Submit Order</button>
                                </div>
                            </div>
                        </div>
                   </div>
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam odio lacus, 
                    tincidunt at dolor eu, commodo aliquam nisi. Donec consequat tellus id felis placerat sodales. Cras fermentum est vitae tincidunt interdum. 
                    Sed vitae augue diam. Praesent non odio eget neque blandit ornare. Duis semper justo purus, at finibus massa blandit.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam odio lacus, 
                    tincidunt at dolor eu, commodo aliquam nisi. Donec consequat tellus id felis placerat sodales. Cras fermentum est vitae tincidunt interdum. 
                    Sed vitae augue diam. Praesent non odio eget neque blandit ornare. Duis semper justo purus, at finibus massa blandit.
                    </p>
             </div>
           </div>
        </div>
       </header>
       
       <div class = "col-md-8 col-md-offset-4">
            <div class = "col-md-12">
                <div class = "well">
                    <div class = "text-right">
                        <button class = "btn btn-danger">Leave Comment</button>
                    </div>
                </div>

                <div class = "well">
                    <span class = "lead">Mr. Coder</span>
                    <span class = "pull-right"> 3 days ago</span>
                    <p>I really love this bike..amazing experience on riding recommend for sporst adventure......</p>
                </div>

                <div class = "well">
                    <span class = "lead">Mr. Coder</span>
                    <span class = "pull-right"> 3 days ago</span>
                    <p>I really love this bike..amazing experience on riding recommend for sporst adventure......</p>
                </div>

                <div class = "well">
                    <span class = "lead">Mr. Coder</span>
                    <span class = "pull-right"> 3 days ago</span>
                    <p>I really love this bike..amazing experience on riding recommend for sporst adventure......</p>
                </div>
            </div>
       </div>

    <div class = "container">
      <div class = "page-header"><h3 class = "text-center">Related Products</h3></div>
        <div class = "col-md-3">
          <div class = "thumbnail">
             <img src="pics/1.jpg" style = "width:100%">
             <div class = "caption">
                   <h4 class = "pull-right">Php: 5,000,000</h4>
                   <h4><a href="product.php">Sports Bike</a></h4>
                   <p>
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam odio lacus, 
                    tincidunt at dolor eu, commodo aliquam nisi. Donec consequat tellus id felis placerat sodales. Cras fermentum est vitae tincidunt interdum. 
                    Sed vitae augue diam.</p>
             </div>
           </div>
        </div>
        
        <div class = "col-md-3">
          <div class = "thumbnail">
             <img src="pics/2.jpg" style = "width:100%">
             <div class = "caption">
                   <h4 class = "pull-right">Php: 5,000,000</h4>
                   <h4><a href="product.php">Sports Bike</a></h4>
                   <p>
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam odio lacus, 
                    tincidunt at dolor eu, commodo aliquam nisi. Donec consequat tellus id felis placerat sodales. Cras fermentum est vitae tincidunt interdum. 
                    Sed vitae augue diam.</p>
             </div>
           </div>
        </div>

        <div class = "col-md-3">
          <div class = "thumbnail">
             <img src="pics/3.jpg" style = "width:100%">
             <div class = "caption">
                   <h4 class = "pull-right">Php: 5,000,000</h4>
                   <h4><a href="product.php">Sports Bike</a></h4>
                   <p>
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam odio lacus, 
                    tincidunt at dolor eu, commodo aliquam nisi. Donec consequat tellus id felis placerat sodales. Cras fermentum est vitae tincidunt interdum. 
                    Sed vitae augue diam.</p>
             </div>
           </div>
        </div>

        <div class = "col-md-3">
          <div class = "thumbnail">
             <img src="pics/9.jpg" style = "width:100%">
             <div class = "caption">
                   <h4 class = "pull-right">Php: 5,000,000</h4>
                   <h4><a href="product.php">Sports Bike</a></h4>
                   <p>
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam odio lacus, 
                    tincidunt at dolor eu, commodo aliquam nisi. Donec consequat tellus id felis placerat sodales. Cras fermentum est vitae tincidunt interdum. 
                    Sed vitae augue diam.</p>
             </div>
           </div>
        </div>
    </div>
</body>
</html>