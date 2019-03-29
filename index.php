<!DOCTYPE html>
<html lang="en">
<head>
	<title>Real Estate Co</title>
	
	<!-- Meta Tags -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- image on tab -->
	<link rel="icon" href="img/Flat Gradient Social Media Icons/16/500px icon.png">

	<!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">

	<!-- Style sheet -->
	<link href="css/stylesheet.css" rel="stylesheet" type="text/css">

	<!-- React CDN -->
	<script crossorigin src="https://unpkg.com/react@16/umd/react.development.js"></script>
	<script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


	<style type="text/css" media="screen">

    /*style for background image*/
		.img1::before {
			background-image: url(img/architecture-beautiful-exterior-106399.jpg);
			background-size: cover;
			content: "";
			display: block;
			position: absolute;
			width: 100%;
			height: 300px;
			z-index: -2;
			opacity: 0.25;
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-position: center; 
		}

        .img2::before {
            background-image: url(img/architecture-beautiful-exterior-106399.jpg);
            background-size: cover;
            content: "";
            display: block;
            position: absolute;
            width: 100%;
            height: 500px;
            z-index: -2;
            opacity: 0.25;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
        }



    .searchbar{
      margin-bottom: auto;
      margin-top: auto;
      height: 60px;
      background-color: #353b48;
      border-radius: 30px;
      padding: 10px;
    }

    .search_input{
      color: white;
      border: 0;
      outline: 0;
      background: none;
      width: 0;
      line-height: 40px;
      transition: width 0.4s linear;
    }

    .searchbar:hover > .search_input{
      padding: 0 10px;
      width: 450px;
      transition: width 0.4s linear;
    }

    .searchbar:hover > .search_icon{
      background: white;
      color: #e74c3c;
    }

    .search_icon{
      height: 40px;
      width: 40px;
      float: right;
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 50%;
      color:white;
    }
	</style>

</head>
<body style="background-color: #748686">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light justify-content-center img1" style="height: 300px;">
            <div>
                <ul class="nav" style="font-family: 'Roboto', sans-serif; color: black; text-shadow: 1px 1px 2px #FFFFFF;">
                    <li class="nav nav-tabs">
                      <a class="nav-link" href="#">
                        <img src="img/Flat Gradient Social Media Icons/64/500px icon.png" alt="Company Logo also link home" style="height: 35px">
                      </a>
                    </li>
                    <li class="nav nav-tabs">
                        <a class="nav-link" href="index.php" style="color: black"><h4>Real Estate Co</h4></a>
                    </li>
                    <li class="nav nav-tabs">
                        <a id="buy" name="buy" class="nav-link" href="#" style="color: black;"><h4>Buy</h4></a>
                    </li>
                    <li class="nav nav-tabs">
                        <a id="rent" name="rent" class="nav-link" href="rentInventory.php" style="color: black;"><h4>Rent</h4></a>
                    </li>
                    <li class="nav nav-tabs">
                        <a class="nav-link" href="soldInventory.php" style="color: black;"><h4>Sold</h4></a>
                    </li>
                    <li class="nav nav-tabs">
                      <a class="nav-link" href="login.php" style="color: black;"><h4>Login</h4></a>
                    </li>
                    <li class="nav nav-tabs">
                      <a class="nav-link" href="signin.php" style="color: black;"><h4>Join Us</h4></a>
                    </li>
                </ul>
            <br>
                <form action="mydb/search.db.php" method="POST" role="form" data-toggle="validator">
                    <div class="container h-100">
                        <div class="d-flex justify-content-center h-100">
                            <div class="searchbar">
                                <input class="search_input" type="text" name="search" placeholder="Search for Suburb" required>
                                <a class="search_icon"><i class="fas fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <br>
        </nav>
    </header>
    <main role="main">
        <section class="">
            <div class="container marketing" style="padding-top: 25px;">
                <!-- Three columns of text below the carousel -->
                <div class="row" style="padding-bottom: 25px;">
                    <div class="col-lg-4 border" style="background-color: #687878;">
                        <img class="rounded-circle" src="./img/brisbane.jpg" alt="Generic placeholder image" style="height: 140px; width: 140px;">
                        <h2>Brisbane</h2>
                        <p>Brisbane, capital of Queensland, is a large city on the Brisbane River. Clustered in its South Bank cultural precinct are the Queensland Museum and Sciencentre, with noted interactive exhibitions. Another South Bank cultural institution is Queensland Gallery of Modern Art, among Australia's major contemporary art museums. Looming over the city is Mt. Coot-tha, site of Brisbane Botanic</p>
                        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4 border-bottom border-top" style="background-color: #687878;">
                        <img class="rounded-circle" src="./img/sydney.jpg" alt="Generic placeholder image" style="height: 140px; width: 140px;">
                        <h2>Sydney</h2>
                        <p>Sydney, capital of New South Wales and one of Australia's largest cities, is best known for its harbourfront Sydney Opera House, with a distinctive sail-like design. Massive Darling Harbour and the smaller Circular Quay port are hubs of waterside life, with the arched Harbour Bridge and esteemed Royal Botanic Garden nearby. Sydney Tower’s outdoor platform, the Skywalk, offers 360-degree views of the city and suburbs.</p>
                        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4 border" style="background-color: #687878;">
                        <img class="rounded-circle" src="./img/melbourne.jpg" alt="Generic placeholder image" style="height: 140px; width: 140px;">
                        <h2>Melbourne</h2>
                        <p>Melbourne is the coastal capital of the southeastern Australian state of Victoria. At the city's centre is the modern Federation Square development, with plazas, bars, and restaurants by the Yarra River. In the Southbank area, the Melbourne Arts Precinct is the site of Arts Centre Melbourne – a performing arts complex – and the National Gallery of Victoria, with Australian and indigenous art.</p>
                        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div>
        </section>
        <section class="img2" style="height: 500px;">
        </section>
        <section style="width: 100% ">
            <hr class="featurette-divider">

            <div style="padding-left: 5%; padding-right: 0%; width: 95%">
                <div class="row featurette border" style="background-color: #687878">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">We Sell Open Properties <span class="text-muted">It'll blow your mind.</span></h2>
                        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                    </div>
                    <div class="col-md-5">
                        <img class="featurette-image img-fluid mx-auto rounded-circle" src="./img/farmland.jpg" style="width: 500px;" alt="">
                    </div>
                </div>
            </div>

            <hr class="featurette-divider">

            <div style="padding-left: 5%; padding-right: 0%; width: 95%">
                <div class="row featurette border" style="background-color: #687878">
                    <div class="col-md-7 order-md-2">
                        <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
                        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <img class="featurette-image img-fluid mx-auto rounded-circle" src="./img/old%20queenslander.jpg" style="width: 500px;" alt="">
                    </div>
                </div>
            </div>


            <hr class="featurette-divider">

            <div style="padding-left: 5%; padding-right: 0%; width: 95%">
                <div class="row featurette border" style="background-color: #687878">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                    </div>
                    <div class="col-md-5">
                        <img class="featurette-image img-fluid mx-auto rounded-circle" src="./img/images.jpg" style="width: 500px;" alt="">
                    </div>
                </div>
            </div>

            <hr class="featurette-divider">
        </section>
    </main>



<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="js/jquery-3.3.1.min.js"><\/script>')</script>

<!-- Bootstrap validators -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/1000hz-bootstrap-validator.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.js"></script>

</body>
</html>