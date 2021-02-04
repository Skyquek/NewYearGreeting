<?php include 'session.php'; ?>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
img {
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
</style>
</head>

<body>
	<div id="angpau">
		<img src="assets/img/angpau.jpg" alt="ang pau" width="500" height="600"> 
	</div>

	<div id="gift-card">
		<img src=<?php echo "assets/img/".$_SESSION['path'];?> alt="gift-card"> 
	</div>

</body>

<script>
$("#angpau").click(function() {
	$("#angpau").fadeOut(1000);
	$("#gift-card").fadeIn(1000);
});

</script>