<html>
        <head>
                <title>Demo Pic</title>


<!-- Latest compiled and minified CSS -->
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
                <h1>Demo Pic</h1>


                <?php
                /*
                        $folder = 'pic/';
                        $images = glob($folder.'*.{jpg, jpeg, png, gif}', GLOB_BRACE);
                
                
                        $x = 0;
                        foreach($images as $image){
                                echo $x++;
                                echo "<img src = '$image' width='500px'>";
                                echo "<br>";
                        }
                        */
                ?>

      <div class = "container">
        <div id = "myCarousel" class = "carousel slide" data-ride="carousel">
            <ol class = "carousel-indicators">

                                <?php
								$x = 0;
                                $folder = 'pic/';
                                $images = glob($folder. '*.{jpg, jpeg, png, gif}', GLOB_BRACE);   
                                foreach($images as $image){
                                         if($x ==0){
                                                 echo "<li data-target='#myCarousel' data-slide-to='0' class = 'active'></li>";
                                         }
                                         else{
                                                 echo "<li data-target='#myCarousel' data-slide-to='$x'></li>";

                                         }
                                         $x++;
                                }


                                ?>


            </ol>
            <div class = "carousel-inner">

                                <?php
								$x = 0;
                                $folder = 'pic/';
                                $images = glob($folder. '*.{jpg, jpeg, png, gif}', GLOB_BRACE);   
                                foreach($images as $image){
                                         if($x == 0){
                                                echo"
                                                <div class = 'item active'>
                                                        <img src='$image' width='1000px'>
                                                        <div class='carousel-caption'>
                                                                <h3>My First Pic</h3>
                                                                <p>Caption</p>
                                                        </div>
                                                </div>
                                                
                                                ";
                                         }
                                         else{
                                                 echo"
                                                <div class = 'item'>
                                                        <img src='$image' width='1000px' height='1000px'>
                                                                <div class='carousel-caption'>
                                                                        <h3>My First Pic</h3>
                                                                        <p>Caption</p>
                                                                </div>
                                                </div>
                                                
                                                ";
                                         }
                                         $x++;
                                }

                                ?>



                <a class = "left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class = "glyphicon glyphicon-chevron-left"></span>
                </a>

                <a class = "right carousel-control" href="#myCarousel" data-slide="next">
                    <span class = "glyphicon glyphicon-chevron-right"></span>
                </a>

            </div>
        </div>
    </div>
   </body>
</html>