<?php 
	$id = $_GET['cnt'];
	$file = fopen('../Model/agent.txt', 'r');
	while(!feof($file))
	{
		$get = fgets($file);
		$getarray = explode('|', $get);
		if(isset(($getarray[6])) and trim($getarray[6]) == $id){
			$string = $get;
			break;
		}
	}
	print_r($string);
	fclose($file);
	$file = fopen('../Model/agent.txt', 'r');
	fclose($file);
	$file = '../Model/agent.txt';
	file_put_contents($file,str_replace($string, "" ,file_get_contents($file)));

	header('location: ../Views/Agency_agents.php');
?>