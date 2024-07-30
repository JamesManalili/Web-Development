<html>
	<head>
		<title>Basic of PHP</title>
	</head>
	
	<body>
		<h1>Manalili, James I.</h1>
		<?PHP
		// echo "Hello World";	
		//This is a single line comment
		# This is also a single line comment
		/*
			Multiple lines
			Multiple lines
			Multiple lines
			Multiple lines
			Multiple lines
			Multiple lines
			Multiple lines
			Multiple lines
			Multiple lines
		
		
		echo "<br/>";
		$myText = "Welcome to my page";
		$x = 10;
		$y = 5;
		
		echo $myText;
		echo "<br/>";
		echo $x + $y;
		
	
		PHP Supports Data types
		String
		Integer
		Float(double)
		Boolean
		
		$vstring = "hello";
		$vnumber = 100;
		$vfloat = 10.5;
		$vbool = true;
		
		var_dump($vstring);
		var_dump($vnumber);
		var_dump($vfloat);
		var_dump($vbool);
		
		
		#PHP String function
		
		echo strlen("HELLO WORLD");
		echo "<br/>";
		echo str_word_count("Hello World! Today");
		echo "<br/>";
		echo strrev("New Era University");
		echo "<br/>";
		echo strpos("Hello world!", "world");
		echo "<br/>";
		echo str_replace("world", "Dolly", "Hello world!");
		
		
		# PHP OPERATORS
		# Arithmetic + - * / % **
		# Assignment x=y x+=y x-=y
		# Comparison == ===(will return if true) != <> !== > < >= <=
		# Increment/Decrement ++$x $x++
		# Logical and or xor && || !
		# String . .= $txt1.$txt2
		# Array
		# Conditional Assignment ?: ??
		
		
		
		
		 #PHP if else statement
		$x = 20;

		if ($x < 20){
			echo "The value is less than 20";
		}elseif($x == 20){
			echo "The value is equal to 20";
		}else{
			echo "The value is Invalid";
		}
		
		
		
		
		#PHP switch case statement
		  
		$favcolor = "green";
		
		switch($favcolor) {
		case "red";
			echo "You have a red t-shirt";
			break;
		case "blue";
			echo "You have a blue t-shirt";
			break;
		case "green";
			echo "You have a green t-shirt";
			break;
		default:
			echo "No Available Color";
		}
		*/
		
		#SEATWORKKKKK
		$ave = 95;
		if ($ave >= 95 && $ave <= 100) {
			echo "Excellent";
			echo "<img src='https://i.guim.co.uk/img/media/7a6a1f2e8f6ac65ac91003bef6b0ed108f724a89/98_71_4085_2451/master/4085.jpg?width=700&quality=85&auto=format&fit=max&s=a3330e38c634248743dca9f84661af68'/>";
		} elseif ($ave >= 85 && $ave <= 94) {
			echo "Very Good";
		} elseif($ave >= 80 && $ave <= 84){
			echo "Good!";
		} elseif($ave >= 75 && $ave <= 79){
			echo "Passed!";
		}else{
			echo "Go home plant kamote!";
		}
		
		
		
		?>
		
		
		
		
		
	</body>
</html>