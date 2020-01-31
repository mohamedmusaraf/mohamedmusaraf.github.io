
<html>
<head>
  <title>Life Saver/Signin</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <style>body{
        
                background : #B80000;
                background-size: cover;
                background-position: center;
            
                color:black;
    }
        .sign{
            padding-left: 38%;
        }
        .cc{
            padding: 15%;
        }
        .sub{
            padding-left: 38%;
        }
        
    </style> 
    
</head>
<body>
    <nav class="navbar navbar-inverse">
            <div class="container">
			<div class="navbar-header">
				 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-nav-demo" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
				<a href="#" class="navbar-brand">Life Saver<span class="glyphicon glyphicon-tint" aria-hidden="true"></span></a>
                
			</div>
			<div class="collapse navbar-collapse" id="bs-nav-demo">
				<ul class="nav navbar-nav">
                
                    <li ><a href="pro2app.html">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#">Search<i class="fa fa-search"> </i>
                        </a></li>
                    <li><a href="FormSolution.html">Sign Up  <i class="fa fa-user-plus"> </i>
                        </a></li>
                    <li><a href="login.php">Login <i class="fa fa-user"></i></a></li>
				</ul>
			</div>
		</div>
	</nav>
    <div class="cc">
<div class="alert alert-danger" role="alert">Search for the required blood group(SAVE LIFE!)</div>


<div class="jumbotron">
    <h3 class="sign"><span class="label label-primary label-lg">SAVE LIFE</span></h3>
  <form action="tab.php" method="POST">
     <label for="selectc">Blood Group:</label>
     <select name="selectc" id="selectc">
        <option value="0" selected disabled>--Select blood group--</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
        <option value="A+">A+</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="A1B+">A1B+</option>
        <option value="A1B-">A1B-</option>
        
      </select>
      <br>
      <label for="selectl">Location:</label>
     <select name="selectl" id="selectl">
        <option value="0" selected disabled>--Select Location--</option>
        <option value="chennai">chennai</option>
        <option value="kanchipuram">kanchipuram</option>
        <option value="thiruvallur">thiruvallur</option>
        <option value="madurai">madurai</option>

        
      </select>
   

   
    <div class="sub">
      <input type="submit" value="Search" />
    </div>
  </form>  
    </div>
    </div>
     <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>
