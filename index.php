<!DOCTYPE html>
<html>
<?php
include("link.php")
?>

<head>
	<title>Bootstrap 4 Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand " href="#">Navbar</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse " id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="#">Gallery <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="#">Link</a>
				</li>


			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>

	<nav aria-label="Page navigation example">
		<ul class="pagination">
			<li class="page-item"><a class="page-link" href="#">Previous</a></li>
			<li class="page-item"><a class="page-link" href="#">1</a></li>
			<li class="page-item"><a class="page-link" href="#">2</a></li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item"><a class="page-link" href="#">Next</a></li>
		</ul>
	</nav>

	<div class="dropdown">
		<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			<a class="dropdown-item" href="#">Action</a>
			<a class="dropdown-item" href="#">Another action</a>
			<a class="dropdown-item" href="#">Something else here</a>
		</div>
	</div>
	<div class="container mt-5 mb-5 ">
		<h1 class="text-center">Let's See What You Are</h1>
		<br>
		<div class="text-center border border-dark rounded">
			<h2>Enter Your Name </h2>
			<div class="inp">
				<input type="text" name="" id="nameid" placeholder="Enter Name" class="text-center">

			</div>
			<br>
			<div class="imgdiv">
				<img src="images/person.png" width="200" height="200" class="imgid">
			</div>
			<br>
			<div class="text-center">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
	</div>

	</span>
	<script>
	$(document).ready(function() {
		$('button').click(function() {
			const name = $('#nameid').val();
			alert(name);
			$('.imgid').attr('src', `
https://joeschmoe.io/api/v1/${name}`);
		})
	});
	</script>

</body>

</html>