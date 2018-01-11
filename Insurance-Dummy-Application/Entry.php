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
	$policyNumber = $_POST['PolicyNumber'];
	$vehicleNumber = $_POST['VehicleNumber'];
	$name = $_POST['Name'];
	$address = $_POST['Address'];
	$city = $_POST['City'];
	$pin = $_POST['Pin'];
	$mobile = $_POST['Mobile'];
	$landline = $_POST['Landline'];
	$emailid = $_POST['Email'];
	$date = $_POST['date'];
	$place = $_POST['PlaceOfAccident'];
	//$typeOfDamage = $_POST['TypeOfDamage'];
	$description = $_POST['Description'];
	$dname = $_POST['DName'];
	$dage = $_POST['DAge'];
	$dLicenseNo = $_POST['LicenseNo'];
	$rto = $_POST['RTO'];
	//$ll = $_POST['LL'];
	$llFinal = "";
	$damage = "";
	$coPassengerDetail = $_POST['CoPassenger'];
	if (isset($_POST['TypeOfLoss'])) {
		$typeOfDamage = $_POST['TypeOfLoss'];
		echo "TYPE OF LOSS:";
		foreach ($typeOfDamage as $type1) {
			$damage = $damage.$type1;
			//echo $damage."<br>";
		}
	}

	if (isset($_POST['LL'])) {
		$ll = $_POST['LL'];
		echo "LL:";
		foreach ($ll as $llr) {
			//echo $llr."<br>";
		}
	}
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

	$sql = "INSERT INTO insuranceautomation (PolicyNumber,VehicleNumber,Name,Address,City,Pin,Mobile,Landline,Email,Date,Place,Typeofloss,Description,Dname,Dage,DLicense,RTO,LL,Copassenger) VALUES ('$policyNumber','$vehicleNumber','$name','$address','$city','$pin','$mobile','$landline','$emailid','$date','$place','$damage','$description','$dname','$dage','$dLicenseNo','$rto','$llr','$coPassengerDetail')";

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
