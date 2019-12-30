<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Menue Form</title>
	<style type="text/css">
		form{
			width: 300px;
			height: 120px;
			margin:auto;
			background-color: lightgrey;
			border-radius: 15px;
		}
		input[type=text]{
			margin-top: 20px;
			margin-left: 20px;
		}
		label{
			margin-left: 20px;
			font-size: 20px;
			font-weight: bold;
		}
		input[type=submit]{
			background-color: skyblue;
			margin-left: 130px;
			margin-top: 20px;
			border-radius: 20px;
			padding: 10px;
			font-weight: bold;
			font-size: 15px;
			border: 1px solid skyblue;
		}

	</style>
</head>
<body>
<form action="" method="post">
	<label for="name">Day:</label>
	 <input type="text" name="name"><br>
	<!-- E-mail : <input type="text" name="email"><br> -->
	<input type="submit" name="submit">

	
</form>
    
<?php 

	if(isset($_POST['submit'])){

		$day = $_POST["name"];
			if ($day == "monday"){
		echo "Today menue is chinese";
}
elseif ($day == "tuesday") {
	echo " Today menue is Malai Boti";
}
elseif ($day == "wednesday") {
	echo " Today menue is Chicken Karhai";
}
elseif ($day == "thursday") {
	echo " Today menue is chicken Manchurian";
}
elseif ($day == "friday" ) {
	echo " Today menue is Biryani";
}
elseif ($day == "saturday" ) {
	echo " Today menue is Qourma";
}

else{
	echo "Not Available";
  }
}
 ?>
	
</body>
</html>