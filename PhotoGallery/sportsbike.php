<!DOCTYPE html>
<html lang="en">
<head>
         <title>Photo Gallery</title>
        <link rel = "stylesheet" href = "css/bootstrap.min.css">
		<link rel = "stylesheet" href = "css/lightbox.css">
        <script src = "js/jquery.js"></script>
        <script src = "js/bootstrap.js"></script>
		<script src = "js/lightbox.js"></script>
		<style>
			.thumbnail img{
				width: 350px;
				heigth: 200px;
			}
		</style>
</head>
<body>
        <nav class = "navbar navbar-default">
        <div class = "container">
                <div class = "navbar-header">
                   <div class = "navbar-brand">Photo Gallery</div>
                </div>
           
                <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="sportsbike.php">Sports Bike</a></li>
                        <li><a href="others.php">Others</a></li>
                </ul>
             </div>
         </nav>

       <div class="container">

		  <div class="page-header">
			<h3>Photo Gallery</h3>
		  </div>
		  
		  
		  <div class="row">
			<div class="col-md-4">
				<a href="pics/1.jpg" data-lightbox="gallery" data-title ="My sports bike 1" class="thumbnail">
					<img src="pics/1.jpg">
				</a>		
			</div>
			
			<div class="col-md-4">
				<a href="pics/2.jpg" data-lightbox="gallery" data-title ="My sports bike 2"class="thumbnail">
					<img src="pics/2.jpg">
				</a>	
			</div>
			
			<div class="col-md-4">
				<a href="pics/3.jpg" data-lightbox="gallery"data-title ="My sports bike 3" class="thumbnail">
					<img src="pics/3.jpg">
				</a>
			</div>
			
			<div class="col-md-4">
				<a href="pics/5.jpg" data-lightbox="gallery"  data-title ="My sports bike 4"class="thumbnail">
					<img src="pics/5.jpg">
				</a>
			</div>
			
			<div class="col-md-4">
				<a href="pics/6.jpg" data-lightbox="gallery"  data-title ="My sports bike 5"class="thumbnail">
					<img src="pics/6.jpg">
				</a>
			</div>
			
			<div class="col-md-4">
				<a href="pics/7.jpg" data-lightbox="gallery" data-title ="My sports bike 6" class="thumbnail">
					<img src="pics/7.jpg">
				</a>
		  </div>
		  
		  <footer class="navbar navbar-default navbar-fixed-bottom">
			<div class="container">
			    <p class="text-center" style="padding: 10px; ">Created by Coder</p>
			</div>
		  </footer>
		  
</div>


       
</body>
</html>