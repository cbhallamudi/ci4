<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to CodeIgniter 4!</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="public/assets/css/bs/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public/assets/css/main_styles.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

	<!-- STYLES -->

	<style {csp-style-nonce}>
		body{
			height: 100vh;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top" aria-label="Fourth navbar example">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#">
	    	<img src="public/assets/images/launchpage/DomiNations_Logo.png" width="150" height="50" alt="">
	    </a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>

	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
	            <li class="nav-item">
	              <a class="nav-link active" href="#">About Game</a>
	            </li>
	          </ul>
	          <form>
	            <input class="btn btn-outline-info me-2" type="button" aria-label="Login" value="Login"  data-bs-toggle="modal" data-bs-target="#exampleModal">
	            <button class="btn btn-outline-warning" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Join</button>
	          </form>
	        </div>
	  </div>
	</nav>






<!-- HEADER: MENU + HEROE SECTION -->


<header>
	  <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="7000">
	    
	    <div class="carousel-inner">
	      <div class="carousel-item active">
	      <div class="bg-overlay"></div>
	        <img class="bd-placeholder-img" width="100%" height="100%" src="public/assets/images/launchpage/DomiNations_loading_image.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">

	        <div class="container">
	          <div class="carousel-caption text-light">
	            <h1 class="text-uppercase">dominations.</h1>
	            <p><span class="text-capitalize">this</span> is a strategy based game. <span class="text-capitalize">you</span> will go through an amazing journey.</p>
	            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
	          </div>
	        </div>
	      </div>
	      <div class="carousel-item">
	      <div class="bg-overlay"></div>
	        <img class="bd-placeholder-img" width="100%" height="100%" src="public/assets/images/launchpage/DomiNations-dawnage.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">

	        <div class="container">
	          <div class="carousel-caption text-light">
	            <h1 class="text-uppercase">journey begins</h1>
	            <p><span class="text-capitalize">start</span> your journey from dawn age to information age. <span class="text-capitalize">build</span> your city, make it a superior power, <span class="text-uppercase">dominate</span> the world</p>
	            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
	          </div>
	        </div>
	      </div>
	      <div class="carousel-item">
	      <div class="bg-overlay"></div>
	        <img class="bd-placeholder-img" width="100%" height="100%" src="public/assets/images/launchpage/DomiNations-researches.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">

	        <div class="container">
	          <div class="carousel-caption text-light">
	            <h1 class="text-uppercase">upgrade</h1>
	            <p><span class="text-capitalize">research</span> technologies. <span class="text-capitalize">learn</span> new skills in university. <span class="text-capitalize">upgrade</span> army.<span class="text-uppercase"> dominate</span> the world.</p>
	            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
	          </div>
	        </div>
	      </div>
	      <div class="carousel-item">
	      <div class="bg-overlay"></div>
	        <img class="bd-placeholder-img" width="100%" height="100%" src="public/assets/images/launchpage/DomiNations-mpbattles.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">

	        <div class="container">
	          <div class="carousel-caption text-light">
	            <h1 class="text-uppercase">attack</h1>
	            <p><span class="text-capitalize">attack</span> cities. <span class="text-capitalize">loot</span> resources. <span class="text-uppercase"> dominate</span> the world.</p>
	            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
	          </div>
	        </div>
	      </div>
	      <div class="carousel-item">
	      <div class="bg-overlay"></div>
	        <img class="bd-placeholder-img" width="100%" height="100%" src="public/assets/images/launchpage/DomiNations-defend.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">

	        <div class="container">
	          <div class="carousel-caption text-light">
	            <h1 class="text-uppercase">defend</h1>
	            <p><span class="text-capitalize">build</span> defenses. <span class="text-capitalize">protect</span> your resources.</p>
	            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
	          </div>
	        </div>
	      </div>
	      
	    </div>
	    <!-- <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
	      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	      <span class="visually-hidden">Previous</span>
	    </a>
	    <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
	      <span class="carousel-control-next-icon" aria-hidden="true"></span>
	      <span class="visually-hidden">Next</span>
	    </a> -->
	  </div>
	</header>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content bg-easy-eye">
      <div class="modal-header d-block text-center">
        <h5 class="modal-title h4 text-uppercase" id="exampleModalFullscreenLabel">login</h5>
      </div>
      <div class="modal-body">
      	<form class="row g-3 needs-validation col-md-6 mx-auto" novalidate>
      	  <div class="col-md-12">
      	    <label for="validationCustomUsername" class="form-label">Username</label>
      	    <div class="input-group has-validation">
      	      <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-file-person-fill"></i></span>
      	      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      	      <div class="invalid-feedback">
      	        Please provide an username.
      	      </div>
      	    </div>
      	  </div>
      	  <div class="col-md-12">
      	    <label for="validationCustomUsername" class="form-label">Password</label>
      	    <div class="input-group has-validation">
      	      <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-key"></i></span>
      	      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      	      <div class="invalid-feedback">
      	        Please provide an username.
      	      </div>
      	    </div>
      	  </div>
      	  <div class="col-12 text-center">
      	    <button class="btn btn-primary text-capitalize" type="submit">login</button>
        	<button type="button" class="btn btn-secondary text-capitalize" data-bs-dismiss="modal">cancel</button>
      	  </div>
      	</form>
      </div>
      
    </div>
  </div>
</div>


<!-- SCRIPTS -->
<script src="public/assets/js/jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="public/assets/js/bs/bootstrap.min.js"></script>

<!-- -->

</body>
</html>
