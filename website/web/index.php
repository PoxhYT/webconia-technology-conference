<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>WTC 2021</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico" />

	<!-- STYLES -->

	<style>
		* {
			transition: background-color 300ms ease, color 300ms ease;
		}

		*:focus {
			background-color: rgba(221, 72, 20, .2);
			outline: none;
		}

		html,
		body {
			color: rgba(33, 37, 41, 1);
			font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
			font-size: 16px;
			margin: 0;
			padding: 0;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
			text-rendering: optimizeLegibility;
		}

		header {
			padding: .4rem 0 0;
		}

		.menu {
			background-color: red;
		}

		header ul {
			list-style-type: none;
			margin: 0;
			overflow: hidden;
			padding: 0;
			text-align: right;
		}

		header li {
			display: inline-block;
		}

		header li a {
			border-radius: 5px;
			color: rgba(0, 0, 0, .5);
			display: block;
			height: 44px;
			text-decoration: none;
		}

		header .logo {
			float: left;
			height: 44px;
			padding: .4rem .5rem;
		}

		.section-customers {
			margin: 0 auto;
			max-width: 1000px;
		}

		.section-customers .diagnostics {
			display: block;
			margin-left: auto;
			margin-right: auto;
			background-color: aqua;
		}

		.section-customers .diagnostics .diagnostics_img {
			display: block;
			margin-left: auto;
			margin-right: auto;
			width: 100%;
		}

		.section-customers .diagnostics .informations {
			display: block;
			margin-left: auto;
			margin-right: auto;
			width: 100%;
		}

		.section-customers .table {
			border-radius: 5px;
			box-shadow: 0 0 5px 5px rgba(242, 242, 242, 1);
			font-size: 1vw;
		}


		section .heroe {
			text-align: center;
			margin: 0 auto;
			width: 100%;
		}

		section .heroe .conference_img {
			display: block;
			margin-left: auto;
			margin-right: auto;
			width: 100%;
		}

		section .heroe h1 {
			padding-top: 2%;
			font-size: 4vw;
			font-weight: 500;
		}

		section .heroe h2 {
			font-size: 1.5rem;
			font-weight: 300;
			font-size: 4vw;
			padding: 0;
			line-height: 0.9;
		}

		section {
			margin: 0 auto;
			max-width: 1300px;
			padding: 2.5rem 1.75rem 3.5rem 1.75rem;
		}

		section .wtc_info h1 {
			font-size: 2vw;
		}

		section .wtc_info p {
			font-size: 1vw;
		}

		section button {
			margin-top: 7%;
		}

		section .informations {
			width: auto;
			display: block;
			margin-left: auto;
			margin-right: auto;
		}

		/* section h1 {
			margin-bottom: 2.5rem;
		} */
		section h2 {
			font-size: 120%;
			line-height: 2.5rem;
			padding-top: 1.5rem;
		}

		section pre {
			background-color: rgba(247, 248, 249, 1);
			border: 1px solid rgba(242, 242, 242, 1);
			display: block;
			font-size: .9rem;
			margin: 2rem 0;
			padding: 1rem 1.5rem;
			white-space: pre-wrap;
			word-break: break-all;
		}

		section code {
			display: block;
		}

		section a {
			color: rgba(221, 72, 20, 1);
		}

		section svg {
			margin-bottom: -5px;
			margin-right: 5px;
			width: 25px;
		}

		.further {
			background-color: rgba(247, 248, 249, 1);
			border-bottom: 1px solid rgba(242, 242, 242, 1);
			border-top: 1px solid rgba(242, 242, 242, 1);
		}

		.further h2:first-of-type {
			padding-top: 0;
		}

		footer {
			background-color: rgba(221, 72, 20, .8);
			text-align: center;
		}

		footer .environment {
			color: rgba(255, 255, 255, 1);
			padding: 2rem 1.75rem;
		}

		footer .copyrights {
			background-color: rgba(62, 62, 62, 1);
			color: rgba(200, 200, 200, 1);
			padding: .25rem 1.75rem;
		}

		footer .copyrights p {
			margin-top: 1%;
		}

		.wtc_form {
			max-width: 1100px;
			background-color: whitesmoke;
			display: block;
			margin-left: auto;
			margin-right: auto;
			padding: 3rem;
			width: 100%;
			box-shadow: 0 0 20px rgba(202, 195, 195, 1);
			border-radius: 5px;
			margin-bottom: 5%;
		}

		.wtc_form .wtc_info {
			display: block;
			margin-left: auto;
			margin-right: auto;
			width: 60%;
			text-align: center;
			margin-top: 5%;
		}

		.wtc_form .wtc_info h1 {
			font-size: 25px;
			font-weight: 300;
		}

		.wtc_form .form-group {
			margin-bottom: 2%;
		}

		@media (max-width: 885px) {
			section .wtc_info {
				width: 300px;
				align-self: center;
				background-color: yellow;
			}
		}

		@media (max-width: 629px) {
			header ul {
				padding: 0;
			}

			header .menu-toggle {
				padding: 0 1rem;
			}

			header .menu-item {
				background-color: rgba(244, 245, 246, 1);
				border-top: 1px solid rgba(242, 242, 242, 1);
				margin: 0 15px;
				width: calc(100% - 30px);
			}

			header .menu-toggle {
				display: block;
			}

			header .hidden {
				display: none;
			}

			header li.menu-item a {
				background-color: rgba(221, 72, 20, .1);
			}

			header li.menu-item a:hover,
			header li.menu-item a:focus {
				background-color: rgba(221, 72, 20, .7);
				color: rgba(255, 255, 255, .8);
			}
		}
	</style>
</head>

<body>

	<!-- HEADER: MENU + HEROE SECTION -->
	<header>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<nav class="menu navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand mt-2 mt-lg-0" href="#">
				<img src="https://i.ibb.co/CvkrfkP/imageedit-8-7371663928.png" height="70" alt="" loading="lazy" />
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="/customers">Einschreiben <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#">Team <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#">Über uns <span class="sr-only">(current)</span></a>
					</li>
				</ul>

			</div>
		</nav>
	</header>


	<section>

		<div class="heroe">
			<h1>Willkommen bei der</h1>
			<h2>webconia Technology Conference</h2>
			<img class="conference_img" src="https://i.ibb.co/pjxstZn/conference.png">
		</div>

	</section>

	<div class="further">

		<section>

			<div class="informations">
				<h1>Themen, über die wir reden</h1>

				<h2>
					<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
						<rect x='32' y='96' width='64' height='368' rx='16' ry='16' style='fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px' />
						<line x1='112' y1='224' x2='240' y2='224' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
						<line x1='112' y1='400' x2='240' y2='400' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
						<rect x='112' y='160' width='128' height='304' rx='16' ry='16' style='fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px' />
						<rect x='256' y='48' width='96' height='416' rx='16' ry='16' style='fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px' />
						<path d='M422.46,96.11l-40.4,4.25c-11.12,1.17-19.18,11.57-17.93,23.1l34.92,321.59c1.26,11.53,11.37,20,22.49,18.84l40.4-4.25c11.12-1.17,19.18-11.57,17.93-23.1L445,115C443.69,103.42,433.58,94.94,422.46,96.11Z' style='fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px' />
					</svg>
					Flutter
				</h2>

				<p>Folgende Sachen werden besprochen: Was ist Flutter?, warum Flutter?, das Setup von Flutter,
					die Flutter Architektur, Hot Reload in Flutte und die Vorstellung von Dart.</p>

				<h2>
					<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
						<path d='M431,320.6c-1-3.6,1.2-8.6,3.3-12.2a33.68,33.68,0,0,1,2.1-3.1A162,162,0,0,0,464,215c.3-92.2-77.5-167-173.7-167C206.4,48,136.4,105.1,120,180.9a160.7,160.7,0,0,0-3.7,34.2c0,92.3,74.8,169.1,171,169.1,15.3,0,35.9-4.6,47.2-7.7s22.5-7.2,25.4-8.3a26.44,26.44,0,0,1,9.3-1.7,26,26,0,0,1,10.1,2L436,388.6a13.52,13.52,0,0,0,3.9,1,8,8,0,0,0,8-8,12.85,12.85,0,0,0-.5-2.7Z' style='fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px' />
						<path d='M66.46,232a146.23,146.23,0,0,0,6.39,152.67c2.31,3.49,3.61,6.19,3.21,8s-11.93,61.87-11.93,61.87a8,8,0,0,0,2.71,7.68A8.17,8.17,0,0,0,72,464a7.26,7.26,0,0,0,2.91-.6l56.21-22a15.7,15.7,0,0,1,12,.2c18.94,7.38,39.88,12,60.83,12A159.21,159.21,0,0,0,284,432.11' style='fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px' />
					</svg>
					Gewalt freie Kommunikation
				</h2>

				<p>In der genannten Konferenz werden Themen wie Agenda, Was ist eigentlich gewaltfreie Kommunikation, Warum fällt es
					uns schwer gewaltfrei zu kommunizieren?, Weil wir bewerten und nicht beobachten besprochen.</p>

				<h2>
					<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
						<line x1='176' y1='48' x2='336' y2='48' style='fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px' />
						<line x1='118' y1='304' x2='394' y2='304' style='fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px' />
						<path d='M208,48v93.48a64.09,64.09,0,0,1-9.88,34.18L73.21,373.49C48.4,412.78,76.63,464,123.08,464H388.92c46.45,0,74.68-51.22,49.87-90.51L313.87,175.66A64.09,64.09,0,0,1,304,141.48V48' style='fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px' />
					</svg>
					Entwickllung des Mobilen Internets
				</h2>

				<p>In der Konferenz werde Sachen wie die allgemeine Nutzung von Desktop und Mobilem Internet, Entwicklung des Onlinehandels,
					Smartphone Nutzung, E-Commerce Umsatz nach Plattform, Umsatz Onlline nach Branche, und Zufriedenheit angesprochen.</p>
			</div>

		</section>

		<form action="/" class="wtc_form">
			<div class="form-group">
				<label for="exampleFormControlInput1">Vorname</label>
				<input type="text" class="form-control" id="firstName" placeholder="Vorname">
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1">Nachname</label>
				<input type="text" class="form-control" id="lastName" placeholder="Nachname">
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1">E-Mail</label>
				<input type="email" class="form-control" id="email" placeholder="E-Mail">
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1">Firma</label>
				<input type="text" class="form-control" id="company" placeholder="Firma">
			</div>

			<div class="wtc_info">
				<h1>Hier für die webconia Technology Conference einschreiben</h1>
				<p>Klicken sie hier, um sich für die webconia Technology Conference einzuschreiben.</p>
				<button id="button-post" class="btn btn-primary" onclick="return false;">Absenden</button>
			</div>
		</form>

		<div class="d-flex justify-content-center">
			<div class="spinner-border" role="status" id="loading">
				<span class="sr-only"></span>
			</div>
		</div>

		<section class="section-customers">

			<div class="customers">
				<table id="customer" class="table"></table>
			</div>

			<div class="diagnostics">
				<div class="informations">
					<img class="diagnostics_img" src="https://i.ibb.co/mN0kDQB/undraw-Segment-analysis-re-ocsl.png">
					<p>Hier können sie alle Kunden aufren, die sich bereits für die webconia Technology Conference eingeschrieben haben.</p>
				</div>
			</div>
		</section>

	</div>

	<script>
		function toggleMenu() {
			var menuItems = document.getElementsByClassName('menu-item');
			for (var i = 0; i < menuItems.length; i++) {
				var menuItem = menuItems[i];
				menuItem.classList.toggle("hidden");
			}
		}

		// const button = document.getElementById("submit");
		// button.addEventListener("click", async (event) => {
		// 	const data = {
		// 		firstName: "Niko",
		// 		lastName: "Schmidt",
		// 		email: "a.schmidt@gmail.com",
		// 		company: "n GmbH",
		// 	};

		// 	const options = {
		// 		method: "POST",
		// 		headers: {
		// 			"Content-Type": "application/json",
		// 		},
		// 		body: JSON.stringify(data),
		// 	};

		// 	const response = await fetch("http://localhost:5000/register", options);
		// 	const json = await response.json();
		// 	console.log(json);
		// });

		const button = document.getElementById("button-post");
		button.addEventListener("click", async (event) => {

			const firstName = document.getElementById("firstName");
			const lastName = document.getElementById("lastName");
			const email = document.getElementById("email");
			const company = document.getElementById("company");

			console.log("------------------------");
			console.log("FirstName: " + firstName.value);
			console.log("LastName: " + lastName.value);
			console.log("Email: " + email.value);
			console.log("Company: " + company.value);
			console.log("------------------------");

			const data = {
				firstName: firstName.value,
				lastName: lastName.value,
				email: email.value,
				company: company.value,
			};

			const options = {
				method: "POST",
				mode: 'cors',
				headers: {
					"Content-Type": "application/json",
				},
				body: JSON.stringify(data),
			};

			const response = await fetch("http://localhost:5000/register", options);
			const json = await response.json();
			console.log(json);
			event.preventDefault();

		});
	</script>

	<script>
		// api url
		const api_url =
			"http://localhost:5000/customers/Java-Konferenz";

		// Defining async function
		async function getapi(url) {

			// Storing response
			const response = await fetch(url);

			// Storing data in form of JSON
			var data = await response.json();
			console.log(typeof data);

			if (response) {
				hideloader();
			}
			show(data);
		}
		// Calling that async function
		getapi(api_url);

		// Function to hide the loader
		function hideloader() {
			document.getElementById('loading').style.display = 'none';
		}
		// Function to define innerHTML for HTML table
		function show(data) {
			let tab =
				`<tr>
                    <th scope="col">ID</th>
                    <th scope="col">Vorname</th>
                    <th scope="col">Nachname</th>
                    <th scope="col">Email</th>
                    <th scope="col">Firma</th>
                </tr>`;

			data.forEach((customer, index) => {
				const ID = index + 1;

				tab += `
            <tr>
                <td>${ID}</td>
                <td>${customer.firstName}</td>
                <td>${customer.lastName}</td>
                <td>${customer.email}</td>
                <td>${customer.company}</td>		
            </tr>`;
			});


			document.getElementById("customer").innerHTML = tab;
		}
	</script>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>