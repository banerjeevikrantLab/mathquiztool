<!DOCTYPE html>

<html lang="en">

<head>
	<title>Maths Page</title>
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=1366">
		<link rel="stylesheet" href = "../css/template.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href = "../css/template.css">
  <link rel="stylesheet" href = "css/bootstrap-wysihtml5.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src = "wysihtml5-0.3.0.js"></script>
  <script src = "bootstrap3-wysihtml5.js"></script>
	
	
	<style>
		.jumbotron > .prob-heading{
			color: black;
			font-size: 40px;
		}
		.jumbotron {
			background-color: lightblue;
			height: 300px;
			margin-top: 15px;
			width: 100%;
			font-family: verdana;
		}
		.jumbotron > .btn-big{
			width: 100%;
			height: 60px;
			font-size: 30px;
			border-radius: 30px;
			font-family: serif;
			
		}
		
	</style>
</head>
<body>
	<section class = "banner">
		<div class="container">
			<?php //include "../top_heading.php" ?>
		</div>
	</section>
	<section class = "wrapper style1">
		<div class = "container">
			<div class = "row">
				<div class = "col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class = "jumbotron head">
						<p class = "prob-heading">Find and do interesting Math Problems</p>
						<button class = "btn btn-primary btn-big">Visit Page</button>
					</div>
				</div>
				
				<div class = "col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class = "jumbotron head">
						<h1 class = "prob-heading">Use Math tools like different kinds of Calculator or etc</h1>
						<button class = "btn btn-primary btn-big">Visit Page</button>
					</div>
				</div>
				
				<div class = "col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class = "jumbotron head">
						<h1 class = "prob-heading">Write your own Math Problem.</h1>
						<button class = "btn btn-primary btn-big">Visit Page</button>
					</div>
				</div>
				
				<div class = "col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class = "jumbotron head">
						<h1 class = "prob-heading">Add your own Math tools for everyone to use</h1>
						<button class = "btn btn-primary btn-big">Visit Page</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class = "wrapper style2">
		<div id = "feedback-sec" class = "container">
			<?php //include "../feedbackbox.php" ?>
		</div>
	</section>
	<section class = "footer">
		<?php //include "../bottom_links.php" ?>
	</section>
</body>
</html>