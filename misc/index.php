<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="css/form.css"> 
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 15px 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
  
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 270px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 20px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
  
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
  <a class="navbar-brand" href="#">Shri. Durga Comp.Coaching Center.</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="services.php">Services</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>
  
      
    </ul>

    <form class="form-inline my-2 my-lg-0" maction="" method="POST" target="_blank">
      <input class="form-control mr-sm-2" type="search" placeholder="Search here" aria-label="Search" name="keywords" required="">
     
	 <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="keys_submit">Search
	  <?php   
		$base="Sh. Durga Computer Coaching."; // Change base here 
		$search_URL="http://www.google.com/search?q="; // Google Search Query URL  
		if(isset($_POST['keys_submit'])){ 
		echo $keywords=$_POST['keywords'];
		header("location: ".$search_URL.$keywords.' '.$base );

	}
		?>
	 
	  
	  
	  </button>
    </form>
  </div>
</nav>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="101.jpg" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="502.jpg" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="102.jpg" alt="New York">
    </div>
	
	  
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
<section class="my-5">
<div class ="py-5 ">
<h2 class="text-center"> About Us</h2>  
</div> 
<div class="container-fluid">

<div class="row">
	<div class="col-lg-6 col-md-6 col-12">
		<img src="student.jpg"  height = "400" width="700">
	</div>
	
	<div class="col-lg-6 col-md-6 col-12">
		<h2 class="display-5"> I am Yash Pal Sharma(CEO)S.DCCC.</h2>
		<p class="py-3"> This is "Sh. Durga Computer Coaching Center".
		Pillar of Computer Education. Here you can achieve 
		reliability and Quality of education. At this time 
		you can learn no. of languages like:-</br>
		<b>VB , C , C++ , JAVA , PYTHON , MYSQL , HTML , PHP.</b>
		So don't waste time, Lets Start.
		</p>
		<a href="about.php"class ="btn btn-success"> Check More</a>
		</br>
		
			<div class ="py-5 ">
				<h2 class="text-left">Hours of Operations </h2>  
			</div> 
				
<div class="dropdown">
  <button class ="btn btn-success"> View All</button>
  <div class="dropdown-content">
				<p>Monday		9:30 am - 	6:30 pm</p>
				<p>Tuesday		9:30 am - 	6:30 pm</p>
				<p>Wednesday	9:30 am - 	6:30 pm</p>
				<p>Thursday		9:30 am -	6:30 pm</p>
				<p>Friday		9:30 am - 	6:30 pm</p>
				<p>Saturday		9:30 am - 	6:30 pm</p>
				<p>Sunday 		Closed</p>
		
	
  </div>
</div>
		
		
	</div>
	
</div>

</div>

</section>
<section class="my-5">
<div class ="py-5 ">
<h2 class="text-center"> Our Services </h2>  
</div> 
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col -md 4 col - 12">
				<div class="card" >
					<img class="card-img-top" src="c++.jpg" alt="Card image">
						<div class="card-body">
						<h4 class="card-title"class="text-center">"C++"
						</h4>
						<p class="card-text">Programming Language.
						</p>
						<a href="#" class="btn btn-primary">See Profile
						</a>
						
						</div>
				</div>
			</div>
			<div class="col-lg-4 col -md 4 col - 12">
				<div class="card" >
					<img class="card-img-top" src="505.jpg" alt="Card image">
						<div class="card-body">
						<h4 class="card-title">JAVA
						</h4>
						<p class="card-text">Programming Language.
						</p>
						<a href="#" class="btn btn-primary">See Profile
						</a>
						
						</div>
				</div>
			</div>
			<div class="col-lg-4 col -md 4 col - 12">
				<div class="card" >
					<img class="card-img-top" src="507.jpg" alt="Card image">
						<div class="card-body">
						<h4 class="card-title">PYTHON
						</h4>
						<p  text-centerclass="card-text">Programming Language.
						</p>
						<a href="#" class="btn btn-primary">See Profile
						</a>
						
						</div>
				</div>
			</div>
		</div>	
		
	</div>
	
	<section class="my-5">
<div class ="py-5 ">
<h2 class="text-center"> Our Gallery</h2>  
</div> 
	<div class ="container-fluid">
		<div class ="row">
		  <div class="col-lg-4 col-md-4 col-12">
			<img src="12.jpg" class="img-fluid pb-4">
			
			</div>
			<div class="col-lg-4 col-md-4 col-12">
			<img src="12.jpg" class="img-fluid pb-4">
			
			</div>
			<div class="col-lg-4 col-md-4 col-12">
			<img src="12.jpg" class="img-fluid pb-4">
			
			</div>
			<div class="col-lg-4 col-md-4 col-12">
			<img src="12.jpg" class="img-fluid pb-4">
			
			</div>
			<div class="col-lg-4 col-md-4 col-12">
			<img src="12.jpg" class="img-fluid pb-4">
			
			</div>
			<div class="col-lg-4 col-md-4 col-12">
			<img src="12.jpg" class="img-fluid pb-4">
			
			</div>
			<div class="col-lg-4 col-md-4 col-12">
			<img src="12.jpg" class="img-fluid pb-4">
			
			</div>
			<div class="col-lg-4 col-md-4 col-12">
			<img src="12.jpg" class="img-fluid pb-4">
			
			</div>
			<div class="col-lg-4 col-md-4 col-12">
			<img src="12.jpg" class="img-fluid pb-4">
			
			</div>
		</div>
	</div>
</section>

<section class="my-5">
	<div class ="py-5 ">
		<h2 class="text-center"> User Information </h2>  
	</div>



<div class="w-50 m-auto">
	<form action="userinfo.php" method="post">
		<div class="form-group">
			<label>Username</label>
			<input type="text" name="user" autocomplete="off" class="form-control">
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="text" name="email" autocomplete="off" class="form-control">
		</div>
		<div class="form-group">
			<label>Mobile</label>
			<input type="text" name="mobile" autocomplete="off" class="form-control">
		</div>
		<div class="form-group">
			<label>Comments</label>
			<textarea  class="form-control" name="comment">
			</textarea>
			
		</div>
		<button type="submit" class="btn btn-success">Submit</button>
	</form>
	
	
	
       
      
   
</div>



</section>

<footer>
	<p class="p-3 bg-dark text-white text-center">@ShriDurgaTechnicalProduction</p>
</footer>	
	
	

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>












