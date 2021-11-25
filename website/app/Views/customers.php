<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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

    </style>

    <div class="menu" style="background-color: white;">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid" style="background-color: white;">
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <a class="navbar-brand mt-2 mt-lg-0" href="/">
                        <img src="https://www.webconia.de/wp-content/uploads/2020/03/webconia_logo.svg" height="70" alt="" loading="lazy" />
                    </a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/customers">Einschreiben</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Über uns</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

</head>

<body>
    <!-- Here a loader is created which 
             loads till response comes -->
    <div class="d-flex justify-content-center">
        <div class="spinner-border" role="status" id="loading">
            <span class="sr-only"></span>
        </div>
    </div>

    <section>

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

</body>

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
        // document.getElementById('loading').style.display = 'none';
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
            const ID = index+1;

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

</html>