<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>WTC 2021</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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
			max-width: 1100px;
			background-color: whitesmoke;
			box-shadow: 0 0 20px rgba(202, 195, 195, 1);
			border-radius: 5px;
			margin-top: 5%;
			margin-bottom: 5%;
		}

		.section-customers .diagnostics {
			display: block;
			margin-left: auto;
			margin-right: auto;
		}

		.section-customers .diagnostics .informations {
			display: block;
			margin-left: auto;
			margin-right: auto;
			text-align: center;
			font-size: .85vw;
			width: 50%;
		}

		.section-customers .table {
			border-radius: 5px;
			font-size: 1.8vw;
			font-weight: bold;
			background-color: white;
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
			width: 100%;
			text-align: center;
			margin-top: 5%;
		}

		.wtc_form .wtc_info h1 {
			font-weight: 300;
			font-size: 2vw;
		}

		.wtc_form .form-group {
			margin-bottom: 2%;
		}

		footer {
			background-color: rgba(221, 72, 20, .8);
			text-align: center;
		}

		footer .copyrights {
			background-color: rgba(62, 62, 62, 1);
			color: rgba(200, 200, 200, 1);
			padding: .25rem 1.75rem;
		}

		footer .copyrights p {
			margin-top: 1%;
		}

		@media (min-width: 1600px) {
			.section-customers .table {
				border-radius: 5px;
				font-size: 1vw;
				background-color: white;
			}
		}

		@media (max-width: 885px) {
			.wtc_form .wtc_info h1 {
				font-weight: 600;
				font-size: 4vw;
			}

			.section-customers .diagnostics .informations {
				display: block;
				margin-left: auto;
				margin-right: auto;
				text-align: center;
				font-weight: 600;
				font-size: 4vw;
				width: 100%;
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
				<h1>Themen, ??ber die wir reden</h1>

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

				<p>In der genannten Konferenz werden Themen wie Agenda, Was ist eigentlich gewaltfreie Kommunikation, Warum f??llt es
					uns schwer gewaltfrei zu kommunizieren?, Weil wir bewerten und nicht beobachten besprochen.</p>

				<h2>
					<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
						<line x1='176' y1='48' x2='336' y2='48' style='fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px' />
						<line x1='118' y1='304' x2='394' y2='304' style='fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px' />
						<path d='M208,48v93.48a64.09,64.09,0,0,1-9.88,34.18L73.21,373.49C48.4,412.78,76.63,464,123.08,464H388.92c46.45,0,74.68-51.22,49.87-90.51L313.87,175.66A64.09,64.09,0,0,1,304,141.48V48' style='fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px' />
					</svg>
					Entwicklung des Mobilen Internets
				</h2>

				<p>In der Konferenz werde Sachen wie die allgemeine Nutzung von Desktop und Mobilem Internet, Entwicklung des Onlinehandels,
					Smartphone Nutzung, E-Commerce Umsatz nach Plattform, Umsatz Onlline nach Branche, und Zufriedenheit angesprochen.</p>
			</div>

		</section>

		<form id="form" action="/" class="wtc_form">
			<div class="form-group">
				<label for="exampleFormControlInput1">Vorname</label>
				<input type="text" class="form-control" id="firstName" placeholder="Vorname" autocomplete="FALSE">
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1">Nachname</label>
				<input type="text" class="form-control" id="lastName" placeholder="Nachname" autocomplete="FALSE">
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1">E-Mail</label>
				<input type="email" class="form-control" id="email" placeholder="E-Mail" autocomplete="FALSE">
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1">Firma</label>
				<input type="text" class="form-control" id="company" placeholder="Firma" autocomplete="FALSE">
			</div>

			<div class="wtc_info">
				<h1>Hier f??r die webconia technology conference einschreiben</h1>
				<p>Klicken sie hier, um sich f??r die webconia technology conference einzuschreiben.</p>
				<button id="button-post" class="btn btn-primary">Absenden</button>
			</div>
		</form>
	</div>

	<section class="section-customers">

		<div class="diagnostics">
			<div class="informations">
				<p>Hier k??nnen sie alle Kunden aufrufen, die sich bereits f??r die webconia Technology Conference eingeschrieben haben.</p>
			</div>
			<div class="d-flex justify-content-center">
				<div class="spinner-border" role="status" id="loading">
					<span class="sr-only"></span>
				</div>
			</div>
		</div>

		<div class="customers">
			<table id="customer" class="table"></table>
		</div>

	</section>

	<footer>
		<div class="copyrights">
			<p>?? 1999 ??? 2021 webconia GmbH</p>
		</div>
	</footer>

	<script>
		function toggleMenu() {
			var menuItems = document.getElementsByClassName('menu-item');
			for (var i = 0; i < menuItems.length; i++) {
				var menuItem = menuItems[i];
				menuItem.classList.toggle("hidden");
			}
		}

		const firstName = document.getElementById("firstName");
		const lastName = document.getElementById("lastName");
		const email = document.getElementById("email");
		const company = document.getElementById("company");

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
			
			const response = await fetch("https://backend-webconia-technology-conference/.netlify/functions/app/register", options);

			if (response) {
				const json = await response.json();
				console.log(json);
				event.preventDefault();
				alert('Sie haben sich nun f??r die webconia technology conference eingeschrieben');
			} else {
				alert('Aktuell sind die server leider nicht erreichbar versuchen sie es sp??ter erneut!');
				event.preventDefault();
				return false;
			}
		});
	</script>

	<script>
		// api url
		const api_url =
			"https://backend-webconia-technology-conference/.netlify/functions/app/customers/Java-Konferenz";

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