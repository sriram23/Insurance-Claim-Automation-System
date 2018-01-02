<?php
echo "<html><head><title>Entry</title>";
echo "<!-- Angular -->
	<script src=https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js></script>
	<!-- Bootstrap CSS -->
	<link rel=stylesheet href=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css integrity=sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u crossorigin=anonymous>
	<!-- Bootstrap Optional Theme - CSS -->
	<link rel=stylesheet href=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css integrity=sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp crossorigin=anonymous>
	<!-- Bootstrap - JS -->
	<script src=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js integrity=sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa crossorigin=anonymous></script>";
echo "</head>";
echo "<body>";
	$id = $_POST['Iid'];
	$contact = $_POST['pno'];
	$name = $_POST['name'];
	$date = $_POST['date'];
	$vno = $_POST['vNo'];
	$make = $_POST['make'];
	$location = $_POST['location'];
	$extent = $_POST['extent'];
	$desc = $_POST['desc'];
	$garage = $_POST['Gname'];

	echo "<script>alert($id,$contact,$name,$date,$vno,$make,$location,$extent,$desc,$garage);</script>";

	//Database Connectivity

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "insure";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "<script>alert(Connection Failed);</script>";
}

	$sql = "INSERT INTO insureid (insuranceId,contact,name,date,vehicleNumber,vehicleMake,location,extent,description,garageName) VALUES ('$id','$contact','$name','$date','$vno','$make','$location','$extent','$desc','$garage')";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
$conn->close();

echo "<form action=fetch.php method=post>";
echo "<input type=submit value=GetValues class='btn btn-success'>";
echo "</form>";
echo "</body>";
echo "</html>";
?>
