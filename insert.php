<?php
$firstname = $_POST['first-name'];
$lastname = $_POST['last-name'];
$selectc = $_POST['select-c'];
$selectl = $_POST['select-l'];
$phno = $_POST['ph-no'];
$gender = $_POST['radio-choice'];
$email = $_POST['email'];
$password = $_POST['password'];
$selectchoice = $_POST['select-choice'];
$birthdayday = $_POST['birthday-day'];
$birthdayyear = $_POST['birthday-year'];
if (!empty($firstname) || !empty($lastname) || !empty($selectc) || !empty($selectl) || !empty($phno) || !empty($gender) || !empty($email) || !empty($password) || !empty($selectchoice) || !empty($birthdayday) || !empty($birthdaymonth)){
	$host="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname="html";
	$conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);
	if(mysqli_connect_error())
	{
		die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
		
	}
	else
	{
		$SELECT="SELECT email from register Where email=? Limit 1";	
		$INSERT="INSERT Into register (firstname,lastname,selectc,selectl,phno,gender,email,password,selectchoice,birthdayday,birthdayyear) values(?,?,?,?,?,?,?,?,?,?,?)";
		$stmt = $conn->prepare($SELECT);
		$stmt->bind_param("s",$email);
		$stmt->execute();
		$stmt->bind_result($email);
		$stmt->store_result();
		$rnum = $stmt->num_rows;
		if($rnum==0)
		{
			$stmt->close();
			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("sssssssssii",$firstname,$lastname,$selectc,$selectl,$phno,$gender,$email,$password,$selectchoice,$birthdayday,$birthdayyear);
			$stmt->execute();
			echo "Inserted successfully";
            
            header("location: login.php");
		}
		else
		{
			echo "Already registered with this email";
		}
		$stmt->close();
		$conn->close();			
	}

}
else
{
	echo "All fields are required!";
	die();
}


?>