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

if ($id == 1) {

$jobrecord = array(

		'app_date' =>'November 3, 2017',
		'contact' => 'website',
		'employer_name' => 'International Monetary Fund (IMF)',
		'employer_address' => '700 19th St. NW; Washington DC 20431',
		'employer_website' => 'http://www.imf.org',
		'position' => 'Information Management Assistant',
		'work_type' => 'Full time',
		'contact' => 'n/a',
		'contact_tel' => 'n/a',
		'app_submit' => 'yes',
		'confirmation_info' => 'e-mail confirmation received',
);
	
} 

if ($id == 2) {

	$jobrecord = array(

		'app_date' =>'October 29, 2017',
		'contact' => 'website',
		'employer_name' => 'Association of American Medical Colleges',
		'employer_address' => '655 K St. NW; Washington DC 20001',
		'employer_website' => 'http://www.aamc.org',
		'position' => 'Hospital Policy and Regulatory Specialist',
		'work_type' => 'Full time',
		'contact' => 'n/a',
		'contact_tel' => 'n/a',
		'app_submit' => 'yes',
		'confirmation_info' => 'e-mail confirmation received',
);

} else {
	
	//echo "No job record selected";
	//this else statement did not work with the echo statement 

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
	<b>contact</b> <?php echo $jobrecord['contact']; ?><br>
	<b>Employer name</b> <?php echo $jobrecord['employer_name']; ?><br>
	<b>Employer address</b> <?php echo $jobrecord['employer_address']; ?><br>
	<b>Employer website</b> <?php echo $jobrecord['employer_website']; ?><br>
	<b>Position title</b> <?php echo $jobrecord['position']; ?><br>
	<b>Work type</b> <?php echo $jobrecord['work_type']; ?><br>
	<b>Contact person</b> <?php echo $jobrecord['contact']; ?><br>
	<b>Contact telephone</b> <?php echo $jobrecord['contact_tel']; ?><br>
	<b>Application submitted</b> <?php echo $jobrecord['app_submit']; ?><br>
	<b>Confirmation information</b> <?php echo $jobrecord['confirmation_info']; ?><br>

</p>
</body>	
</html>
