<?php 
	
	function connection()
	{
		$con = mysqli_connect('localhost', 'root', '', 'tourism and travel schemer');
		return $con;
	}
	function signup($agentid, $name, $contact, $rate, $hire){
		$con = connection();
		$ssql = "select * from agents";
		$id = 1;
		$res = mysqli_query($con, $ssql);
		if(mysqli_num_rows($res)){
			while($row = mysqli_fetch_assoc($res)){
				$temp = $row['agentid'];
				$id = max($id, $temp);
				//print_r($row);
			}
			$id += 1;
		}
		$sql = "insert into agents values ('{$id}', '{$agentid}' ,'{$name}','{$contact}','{$rate}','{$hire}')";
		if(mysqli_query($con, $sql))
		{
			return true;
		}else{
			return false;
		}
	}
	function getagents($agencyid)
	{
		$con = connection();
		$sql = "select * from agents where agencyid = '{$agencyid}'";
		$res = mysqli_query($con, $sql);
		if(mysqli_num_rows($res))
		{
			$Agents = array();
			while($row = mysqli_fetch_assoc($res))
			{
				$gency = [

					'agentid' => $row['agentid'],
					'agencyid' => $row['agencyid'],
					'agentname' => $row['name'],
					'contact' => $row['contact'],
					'rating' => $row['rating'],
					'hire' => $row['hire']
				];

				array_push($Agents, $gency);
			}

			return $Agents;
		}
	}
	function getagent($id, $agencyid)
	{
		$con = connection();
		$sql = "select * from agents where agentid = '{$id}' and agencyid = '{$agencyid}'";
		$res = mysqli_query($con, $sql);
		if(mysqli_num_rows($res))
		{
			while($row = mysqli_fetch_assoc($res))
			{
				if($row['agencyid'] == $agencyid && $row['agentid'] == $id)
				{
					$agent = $row;
					return $agent;
				}
			}
		}
	}
	function updateagent($id, $agencyid, $name, $contact, $hire, $rating)
	{
		$con = connection();
		$sql = "update agents set name ='{$name}',contact = '{$contact}',rating = '{$rating}',hire ='{$hire}' where agentid='{$id}'";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}
	function deleteagent($id, $agencyid)
	{
		$con = connection();
		$sql = "DELETE FROM `agents` WHERE `agents`.`agentid` = 1;";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>