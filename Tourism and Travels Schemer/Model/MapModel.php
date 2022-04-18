
<?php 
	function connection()
	{
		$con = mysqli_connect('localhost', 'root', '', 'tourism and travel schemer');
		return $con;
	}
	function getmaps($id)
	{
		$con = connection();
		$sql = "select * from maps where agencyid='{$id}'";
		$res = mysqli_query($con, $sql);
		$maps = array();
		if(mysqli_num_rows($res))
		{
			while($row = mysqli_fetch_assoc($res))
			{
				$temp = [

					'mapid' => $row['mapid'],
					'agencyid' => $row['agencyid'],
					'from' => $row['begin'],
					'to' => $row['end'],
					'cost' => $row['cost'],
					'distance' => $row['distance']
				];
				array_push($maps, $temp);
			}
			arsort($maps);
			return $maps;
		}
	}
	function insertmap($aid, $from, $to, $cost, $dis)
	{
		$con = connection();
		$ssql = "select * from maps";
		$id = 1;
		$res = mysqli_query($con, $ssql);
		if(mysqli_num_rows($res)){
			while($row = mysqli_fetch_assoc($res)){
				$temp = $row['mapid'];
				$id = max($id, $temp);
			}
			$id += 1;
		}
		$sql = "insert into maps values ('{$id}','{$aid}','{$from}','{$to}','{$cost}','{$dis}')";
		if(mysqli_query($con, $sql))
		{
			return true;
		}else{
			return false;
		}
	}
	function getmap($mid, $aid)
	{
		$con = connection();
		$sql = "select * from maps where mapid = '{$mid}' and agencyid='{$aid}'";
		$res = mysqli_query($con, $sql);
		if(mysqli_num_rows($res))
		{
			while($row = mysqli_fetch_assoc($res))
			{
				if($row['mapid'] == $mid and $row['agencyid'] == $aid)
				{
					return $row;
				}
			}
		}
	}
	function udpatecost($cost, $mid, $aid)
	{
		$con = connection();
		$sql = "update  maps set cost = '{$cost}' where mapid = '{$mid}' and agencyid='{$aid}'";
		$res = mysqli_query($con, $sql);
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}
	function deletemap($mid, $aid)
	{
		$con = connection();
		$sql = "delete from maps where mapid = '{$mid}'and agencyid='{$aid}'";
		$res = mysqli_query($con, $sql);
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>