<html>
  <head>
	<title>ITLEL2-18</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
  </head>
	<body>
	<h1>Activity 5</h1>
	<div class = "container">
		<ul class = "list-inline">
			<li><a href="#" data-toggle = "popover" data-placement ="top" title = "Top popover" data-content = "Some content Here in popover">Top</a></li>
			<li><a href="#" data-toggle = "popover" data-placement ="bottom" title = "bottom popover" data-trigger = "focus" data-content = "Some content Here in popover">Bottom</a></li>
			<li><a href="#" data-toggle = "popover" data-placement ="left" title = "left popover"  data-trigger = "hover" data-content = "Some content Here in popover">Left</a></li>
			<li><a href="#" data-toggle = "popover" data-placement ="right" title = "right popover">Right</a></li>
		</ul>

		<ul class = "list-inline">
			<li><a href="#" data-toggle = "tooltip" data-placement ="top" title = "Top Tool Tip">Top</a></li>
			<li><a href="#" data-toggle = "tooltip" data-placement ="bottom" title = "bottom Tool Tip">Bottom</a></li>
			<li><a href="#" data-toggle = "tooltip" data-placement ="left" title = "left Tool Tip">Left</a></li>
			<li><a href="#" data-toggle = "tooltip" data-placement ="right" title = "right Tool Tip">Right</a></li>
		</ul>
	</div>
	<script>
		$(document).ready(function(){
			$('[data-toggle = "tooltip"]').tooltip();
			$('[data-toggle = "popover"]').popover();
		});
	</script>


	<hr>
	<br>
	<br>
	<div class = "container">
		<div id = "mycarousel" class = "carousel slide" data-ride = "carousel" style = "width:1000px">
			<ol class = "carousel-indicators">
				<li data-target = "#mycarousel" data-slide-to = "0" class = "active"></li>
				<li data-target = "#mycarousel" data-slide-to = "1" ></li>
				<li data-target = "#mycarousel" data-slide-to = "2" ></li>
			</ol>
			<div class = "carousel-inner">
				<div class = "item active">
					<img src="https://luketscharke.com/tscharke/wp-content/uploads/2017/10/main-image-1000px.jpg" width = "1000px">
					<div class = "carousel-caption">
						<h3>My first Nature Trip!</h3>
						<p>Welcome to hindi ko alam</p>
					</div>
				</div>
				<div class = "item">
					<img src="https://luketscharke.com/tscharke/wp-content/uploads/2018/04/DSC01025-20160907-3-2-PRINT.jpg" width = "1000px">
					<div class = "carousel-caption">
						<h3>My second Nature Trip!</h3>
						<p>Welcome to hindi ko alam pt.2</p>
					</div>
				</div>
				<div class = "item">
					<img src="https://luketscharke.com/tscharke/wp-content/uploads/2019/01/DSC07402-20171115-copy.jpg" width = "1000px">
					<div class = "carousel-caption">
						<h3>My third Nature Trip!</h3>
						<p>Welcome to hindi ko alam pt.3</p>
					</div>
				</div>

				<a class = "left carousel-control" href="#mycarousel" data-slide = "prev">
					<span class = "glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class = "right carousel-control" href="#mycarousel" data-slide = "next">
					<span class = "glyphicon glyphicon-chevron-right"></span>
				</a>
				
			</div>
		</div>
	</div>




	<hr>
	<br/>
	<br/>
	

	<div class="container">
	   <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Open Modal Box</button>
		<div class = "modal fade" id = "myModal">
		 <div class = "modal-dialog" >
			<div class = "modal-content">
				<div class = "modal-header">
				   <button class = "close" data-dismiss = "modal">&times;</button>
				   <h4>This is my modal Header</h4>
				</div>
			<div class = "modal-body">
				<p>This is modal content</p>
			</div>
			<div class = "modal-footer">
				<button class = "btn btn-info" data-dismiss = "modal">Close</button>
			</div>	
		   </div>
		  </div>
		 </div>
	<div>
	</body>
</html>