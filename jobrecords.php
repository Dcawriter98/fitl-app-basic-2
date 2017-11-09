<?php
/*This app is to automate the job records for people searching for work. The form is similar to the information required for the career centers.*/

//Request variable placed to determine what job record appears

$id=$_REQUEST ['id'];

//job record arrays (date of job application, employer info, position, other info)


//Determining what job record to place on screen

/*
Using the id number through the request superglobal, display the appropriate job record on the web page.

The empty array is at the top, if the id number is not 1 or 2. 
*/

$jobrecord = array(
		'app_date' =>'',
		'contact' => '',
		'employer_name' => '',
		'employer_address' => '',
		'employer_website' => '',
		'position' => '',
		'work_type' => '',
		'contact' => '',
		'contact_tel' => '',
		'app_submit' => '',
		'confirmation_info' => '',
	);

//Database connection credentials
$servername = 'localhost';
$username = 'homestead';
$password = 'secret';

//Create connection
$connection = new mysqli($servername, $username, $password);

//Check for an error
if ($connection->connect_error) {
	echo 'Connection failed: ' . $connection->connect_error;
	exit;
}

//Otherwise, connected successfully
//echo 'Connected successfully!';

//Connect to "fitl" database
//SELECT * FROM job_records WHERE id = 1
$connection->select_db('fitl');

//Query to select the object
$sql = 'SELECT * FROM job_records WHERE id = ' . $id;

//Execute the query
$result = $connection->query($sql);

//Check for and retrieve the object
if ($result->num_rows > 0) {
	$jobrecord = $result->fetch_assoc();
	//echo '<pre>';
	//print_r($jobrecord);
	//echo '</pre>';

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Job Applications App</title>
</head>
<body>
	
<!--Display selected information from php code above-->

<h1>Job Application Record</h1>
<p>The job record details follow:<br> 
	<b>Date of application</b> <?php echo $jobrecord['app_date']; ?><br>
	<b>Contact</b> <?php echo $jobrecord['contact_method']; ?><br>
	<b>Employer name</b> <?php echo $jobrecord['employer_name']; ?><br>
	<b>Employer address</b> <?php echo $jobrecord['employer_address']; ?><br>
	<b>Employer website</b> <?php echo $jobrecord['employer_website']; ?><br>
	<b>Position title</b> <?php echo $jobrecord['position']; ?><br>
	<b>Work type</b> <?php echo $jobrecord['work_type']; ?><br>
	<b>Contact person</b> <?php echo $jobrecord['org_contact']; ?><br>
	<b>Contact telephone</b> <?php echo $jobrecord['contact_tel']; ?><br>
	<b>Application submitted</b> <?php echo $jobrecord['app_submit']; ?><br>
	<b>Confirmation information</b> <?php echo $jobrecord['confirmation_info']; ?><br>

</p>
</body>	
</html>
