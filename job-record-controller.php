<?php
/*This app is to automate the job records for people searching for work. The form is similar to the information required for the career centers.*/

//Request variable placed to determine what job record appears

$page = $_REQUEST['page'];


//Determine what page to show
if ($page == 'show') {
	$id = $_REQUEST ['id'];
	show($id);
}
elseif ($page == 'create') {
	create();
}

include 'db-connection.php';

//Load show page
	function show($id) {
		global $connection;

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

}

//Load the view file

include 'job-record-show-view.php';


//Load create page
function create() {
	include 'job-record-create-view.php';
}

?>
