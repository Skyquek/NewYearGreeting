<?php include 'session.php'; ?>

<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style>
		#angpau img {
			position: absolute;
			margin: auto;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
		}

		#angpau:hover {
			cursor: pointer;
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

		/*Firework*/
		* {
			box-sizing: border-box;
		}

		button {
			background-color: rebeccapurple;
			border-radius: 5px;
			box-shadow: 4px 4px 5px rgba(255, 255, 255, 0.15);
			border: none;
			color: white;
			cursor: pointer;
			padding: 1rem 2rem;
			position: relative;
			transition: transform 0.1s linear, box-shadow 0.1s linear;
			z-index: 10;
		}

		button:active {
			transform: translate(4px, 4px);
			box-shadow: 0 0 0 rebeccapurple;
		}

		button:focus {
			outline: none;
		}

		.particle {
			--x: 0;
			--y: 0;
			background-color: rebeccapurple;
			border-radius: 50%;
			position: absolute;
			top: 50%;
			left: 50%;
			height: 5px;
			width: 5px;
			z-index: -1;
		}

		.particle.move {
			animation: move 1000ms linear forwards;
		}

		@keyframes move {
			to {
				transform: translate(var(--x), var(--y));
			}

			95% {
				opacity: 1;
			}

			100% {
				opacity: 0;
			}
		}

		/**********************************/
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
					<button class="btn navbar-btn btn-warning navbar-right" name="logout" role="button"
						type="submit">Logout</button>
				</form>
			</ul>

		</div>
	</nav>

	<div id="angpau">
		<img src="assets/img/angpauicon.jpg" alt="ang-pau" width="500" height="600">
	</div>

	<!-- Modal -->
	<div class="container">
		<div id="imgModel" class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
			aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						This is Your Ang Pau! Quek ah QUek
						<button id="return" type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<img src='<?php echo "assets/img/".$_SESSION[' path'];?>' alt="gift-card" width="100%">
					</div>

				</div>
			</div>
		</div>

	</div>
</body>

<script>
	$("#angpau").click(function () {

		var fire;
		// clearInterval(fire);
		for(var i = 0; i < 50; i++){
			setTimeout(() => {
				firework();

			}, (Math.random() * 1000) % 3000);
		}
		// fire = setInterval(firework(), 1);

		setTimeout(function () {
			clearInterval(fire);
			// $("#angpau").fadeOut(2000);
			$("#imgModel").modal("show");
			$("#gift-card").fadeIn(2000);
		}, 3500);


	});

	$("#return").click(function () {
		// $("#angpau").fadeIn(1000);
	});

	const btn = document.getElementById('angpau');

	function firework() {
		console.log("Firework")
		const particles = [];
		const color = randomColor();

		const particle = document.createElement('span');
		particle.style.zIndex = 10;
		particle.classList.add('particle', 'move');

		const { x, y } = randomLocation();
		particle.style.setProperty('--x', x);
		particle.style.setProperty('--y', y);
		particle.style.background = color;

		btn.appendChild(particle);

		particles.push(particle);

		setTimeout(() => {

			for (let i = 0; i < 100; i++) {
				const innerP = document.createElement('span');
				innerP.style.zIndex = 10;
				innerP.classList.add('particle', 'move');
				innerP.style.transform = `translate(${x}, ${y})`;

				const xs = Math.random() * 200 - 100 + 'px';
				const ys = Math.random() * 200 - 100 + 'px';
				innerP.style.setProperty('--x', `calc(${x} + ${xs})`);
				innerP.style.setProperty('--y', `calc(${y} + ${ys})`);
				innerP.style.animationDuration = Math.random() * 300 + 200 + 'ms';
				innerP.style.background = color;

				btn.appendChild(innerP);
				particles.push(innerP)
			}

			// Explosion speed
			setTimeout(() => {
				particles.forEach(particle => {
					particle.remove();
				})
			}, 1000)
		}, 1500);
	}

	function randomLocation() {
		return {
			x: Math.random() * window.innerWidth - window.innerWidth / 2 + 'px',
			y: Math.random() * window.innerHeight - window.innerHeight / 2 + 'px',
		}
	}

	function randomColor() {
		return `hsl(${Math.floor(Math.random() * 361)}, 100%, 50%)`;
	}

</script>
