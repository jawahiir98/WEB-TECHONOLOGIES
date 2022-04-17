<?php 

	session_start();
	require('../Model/AgencyModel.php');

	$current_agency = $_SESSION['cur_agency'];
	$agencyname = $current_agency['agencyname'];
	$email = $current_agency['email'];
	$contact = $current_agency['contact'];
	//print_r($current_agency);
	if(update($agencyname, $email, $contact, $_SESSION['current_agencyid'])){
		header('location: ../Views/Agency_profile.php');
	}else{
		echo "An error occured";
	}
?>