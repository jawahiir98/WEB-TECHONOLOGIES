<?php 
	session_start();

    $current_agency = $_SESSION['cur_agency'];

    
    $json = $_GET['myjson'];
	$student = json_decode($json, true);
	$agencyname = $student['agencyname'];
    $email = $student['email'];
    $contact = $student['contact'];

    $ok = true;

    if(empty($agencyname))
    {
    	$agencyname = "Agency name cannot be blank";
    	$ok = false;
    }
    $student['agencyname'] = $agencyname;
    if(empty($contact))
    {
    	$contact = "Contact cannot be blank";
    	$ok = false;
    }
    $student['contact'] = $contact;
    if(empty($email))
    {
    	$email = "email cannot be blank";
    	$ok = false;
    }
    $student['email'] = $email;
    if($ok == true)
    {
    	$student['ok'] = true;
    	$current_agency['email'] = $email;
    	$current_agency['agencyname'] = $agencyname;
    	$current_agency['contact'] = $contact;
    	$_SESSION['cur_agency'] = $current_agency;
    }
	echo json_encode($student);
   
?>