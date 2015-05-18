<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>KTS Add Blog Page</title>

		<!-- Bootstrap core CSS (Bootstrap Copyright 2014 to Twitter Inc.) -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.min.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="theme.css" rel="stylesheet">
	</head>
	
	<body>
		<!-- Fixed navbar -->
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="Index.html">Kiraeden Technical Services</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li><a href="Index.html">Home</a></li>
						<li><a href="About.html">About</a></li>
						<li><a href="Services.html">Services</a></li>
						<li class="active"><a href="blog.html">Blog</a></li>
						<li><a href="Software.html">Software</a></li>
						<li><a href="Projects.html">Projects</a></li>
						<li><a href="Contact.html">Contact</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	
		<div class="container">
			<?php
				// define variables and set to empty values
				$author = $title = $day = $month = $year = $content = "";
				
				
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$author = test_input($_POST["author"]);
					$title = test_input($_POST["title"]);
					$day = test_input($_POST["day"]);
					$month = test_input($_POST["month"]);
					$year = test_input($_POST["year"]);
					$content = test_input($_POST["content"]);
					
					echo "$content";
				}

				function test_input($data) {
				   $data = trim($data);
				   $data = stripslashes($data);
				   $data = htmlspecialchars($data);
				   return $data;
				}
			?>
		
			<div class="form-group">
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<p>Author: <input type="text" placeholder="Author" name="author" class="form-control"></p>
					<p>Blog Title: <input type="text" placeholder="Title" name="title" class="form-control"></p>
					<p>Day: <input type="text" placeholder="Day" name="day" class="form-control"></p>
					<p>Month: <input type="text" placeholder="Month" name="month" class="form-control"></p>
					<p>Year: <input type="text" placeholder="Year" name="year" class="form-control"></p>
					<p>Blog Post: <textarea name="content" rows="5" cols="40" class="form-control" type="text"></textarea></p>
					<input class="btn btn-primary" type="submit" name="submit" value="Add Item">
				</form>
			</div>

			<hr>

			<footer>
				<p>&copy; Ethan Lockwood</p>
			</footer>
		</div> <!-- /container -->


    <!-- Bootstrap core JavaScript ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
</html>