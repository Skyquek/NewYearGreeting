<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
#angpau img{
	position: absolute;
	margin: auto;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
}

#gift-card {
	display: none;
}

.pull-right {
	margin-right: 10px;
}

.gift-card .actions {
right: 1em;
top: 1em;
display: block;
position: absolute;
}

.gift-card .actions a {
display: inline-block;
}

.modal-dialog {
	width: 70%;
}

body {
	background-image: url("assets/img/angpau.jpg");
	background-color: #cccccc;
	background-size: cover;
	background-repeat: no-repeat;
}

a {
	text-decoration: none;
	color: white;
}
</style>
</head>

<body>
	<nav class="navbar bg-company-red" style="background-color: #5b4b4b92">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Happy New Year!</a>
			</div>

			<ul class="nav navbar-nav pull-right">
				<form action="session.php" method="POST">
					<button class="btn navbar-btn btn-warning navbar-right" name="logout" role="button" type="submit" href="#">Logout</button>
				</form>
			</ul>

		</div>
	</nav>

	<div id="angpau">
		<img src="assets/img/angpauicon.jpg" alt="ang-pau" width="500" height="600"> 
	</div>

	<!-- <div id="gift-card">
		<div class="actions">
			<a href="#">
				<button type="button" class="btn btn-default delete-image-btn pull-right">
					<span class="glyphicon glyphicon-trash"></span>
				</button>
			</a>
		</div>
		<img src="assets/img/card-wish.jpg" alt="gift-card"> 
	</div> -->

	<!-- Modal -->
	<div class="container">
		<div id="imgModel" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						This is Your Ang Pau!
						<button id="return" type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					  </div>

					<div class="modal-body">
						<img src="assets/img/card-wish.jpg" alt="gift-card" width="100%"> 
					</div>
					
				</div>
			</div>
		</div>

	</div>


</body>

<script>
$("#angpau").click(function() {
	$("#angpau").fadeOut(2000);
	$("#imgModel").modal("show");
	$("#gift-card").fadeIn(2000);
});

$("#return").click(function () {
	$("#angpau").fadeIn(1000);
});


</script>