
<!DOCTYPE html>
<html>
<head>
  <title>Life Saver/Signin</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Javascript goes in the document HEAD -->


<!-- CSS goes in the document HEAD or added to your external stylesheet -->

    <style>body{
        
                background : #B80000;
                background-size: cover;
                background-position: center;
            
                color:black;
    }
         h1,h3{
                color:white;
            }
            h1{
                font-weight: 700;
                font-size: 5em;
            }
            html{
                height: 100%;
            }
            hr{
                
                border-top: 1px solid #f8f8f8;
                border-bottom: 1px solid rgba(0,0,0,0.2);
            }
        #content{
                text-align: center;
                padding-top: 1%;
                font-family :sans-serif;
                    }
        #amago
        {
            padding-left: 25%;
            
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
        table.altrowstable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color: #a9c6c9;
	border-collapse: collapse;
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
                    <li class="active"><a href="FormSolution.html">Sign Up  <i class="fa fa-user-plus"> </i>
                        </a></li>
                    <li><a href="login.php">Login <i class="fa fa-user"></i></a></li>
				</ul>
			</div>
		</div>
	</nav>
     <div class="container">
            <div class="row">
            <div class="col-lg-12">
                <div id="content">
                
                <h1>Donor Details</h1>
                <h3>Please Don't misuse this website!  Save life!</h3>
                <hr>
                   </div>
                </div>
            </div>
    </div>
    <div class="jumbotron" id="amago">
    <table border="1">
    <tr>
        <th>FIRSTNAME</th>
        <th>LASTNAME</th>
        <th>BLOODGROUP</th>
        <th>LOCATION</th>
        <th>PHONE_NO</th>
        <th>GENDER</th>
        <th>EMAIL</th>
    </tr>
<?php
$host="localhost";
$user="root";
$password="";
$db="html";
$eee=mysqli_connect($host,$user,$password,$db);
//mysqli_select_db($db);
if(isset($_POST['selectc']))
{
    $selectc=$_POST['selectc'];
    $selectl=$_POST['selectl'];
    $sql=mysqli_query($eee,"select * from register where selectc='".$selectc."' and selectl='".$selectl."'");
    //$result=mysql_query($sql);
    while($rows=mysqli_fetch_array($sql))
    {
        echo "<tr>";
        echo "<td>";
        
        echo $rows['firstname'];
        echo "</td>";
        echo "<td>";
        echo $rows['lastname'];
        echo "</td>";
        echo "<td>";
        echo $rows['selectc'];
        echo "</td>";
        echo "<td>";
        echo $rows['selectl'];
        echo "</td>";
        echo "<td>";
        echo $rows['phno'];
        echo "</td>";
        echo "<td>";
        echo $rows['gender'];
        echo "</td>";
        echo "<td>";
        echo $rows['email'];
        echo "</td>";
        echo "</tr>";
        echo "<br/>";
        
    }
}
    
    
?>
</table>
    </div>

    
     <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>

