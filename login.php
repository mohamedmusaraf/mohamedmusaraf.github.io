<?php
$host="localhost";
$user="root";
$password="";
$db="html";
$eee=mysqli_connect($host,$user,$password,$db);
//mysqli_select_db($db);
if(isset($_POST['email']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql=mysqli_query($eee,"select * from register where email='".$email."' and password='".$password."'");
    //$result=mysql_query($sql);
    if(mysqli_num_rows($sql)==1)
    {
        header("location: proappp.php");
    }
    else
    {
        echo "Incorrect";
    }
    
}
?>

<html>
<head>
  <title>Life Saver/Login</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <style>
         .navbar navbar-inverse{
            padding: 1px;
        }
        body{
        
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
					<li><a href="webcreat.html">Contact</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
                    <li><a href="search.php">Search<i class="fa fa-search"> </i>
                        </a></li>
                    <li><a href="FormSolution.html">Sign Up  <i class="fa fa-user-plus"> </i>
                        </a></li>
                    <li class="active"><a href="login.html">Login <i class="fa fa-user"></i></a></li>
				</ul>
			</div>
		</div>
	</nav>
        


<div class="cc">
    <div class="alert alert-danger" role="alert">Login process is going on....</div>
<div class="jumbotron">
    <h2 class="sign"><span class="label label-primary label-lg">Login</span></h2>
    <form action="" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    </div>
     <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>
