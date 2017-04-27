<?php

	/**********************
	* Get parameters
	***********************/
	include("./parameters.php");


	/**********************
	* Fetch data from URL GET
	***********************/
	$measuretime=$_GET['date']; //210515192925 = ddmmyyHHMMss
	$imei = $_GET['imei'];
	$fix=$_GET['fix'];
	$long=$_GET['lg'];
	$lat =$_GET['lt'];
	$alt=$_GET['alt'];
	$course=$_GET['course'];
	$speed=$_GET['speed'];
	$pyrotemp=$_GET['pyrotemp'];
	$airtemp=$_GET['airtemp'];
	$lc=$_GET['lc'];
	$roadstatus = $_GET['status'];
	$friction=$_GET['friction'];	
	$reye1=$_GET['reye1'];
	$reye2=$_GET['reye2'];
	$reye3=$_GET['reye3'];
	$filter=$_GET['filter'];
	
	if(isset($_GET['setup']))
	{	
		$setup=true;
	}
	else
	{	
		$setup=false;
	}
	
	/**********************
	* Add some IMEI (+IP) filtering here
	***********************/
	//Filter on IMEI (for storage into corrent db, different customers or so)
	//Filter on IP (for safety)
	
	
	/**********************
	* Convert data
	***********************/	
	//Convert datetime format
	$measureyear = substr($measuretime,4,2);
	$measuremonth= substr($measuretime,2,2);
	$measureday = substr($measuretime,0,2);
	$measurehour = substr($measuretime,6,2);
	$measureminute = substr($measuretime,8,2);
	$measuresecond = substr($measuretime,10,2);
	
	$measuretime = $measureyear."-".$measuremonth."-".$measureday." ".$measurehour.":".$measureminute.":".$measuresecond;
	
	
	/**********************
	* Filter when to save data
	***********************/
	$storeDataInDb = false;
	if(true)//in_array($imei, $approvedImeis))
	{
		if($speed>=$minSpeedToStoreInDb)
		{	
			$storeDataInDb = true;
		}
		
		/**********************
		* Override save filters for setup
		***********************/
		if($setup)
		{
			$storeDataInDb = true;
		}
		
	}
	
	
	
	
	
	if($storeDataInDb)
	{
		/**********************
		* Connect to MySQL db
		***********************/
		$con = mysql_connect($mysql_host,$mysql_user,$mysql_password);
		if (!$con)
		{
			die('Could not connect: ' . mysql_error());
		}
		mysql_select_db($mysql_database, $con);
		mysql_set_charset('utf8');

		/**********************
		* INSERT into MySQL db
		***********************/		
		
		$query = "INSERT INTO `$mysql_datatable` VALUES ('0', UTC_TIMESTAMP(), '$measuretime', '$imei', '$fix', '$long', '$lat', '$alt', '$course', '$speed', '$pyrotemp', '$airtemp', '$lc', '$roadstatus', '$friction','$reye1','$reye2','$reye3','$filter')";		
		$result = mysql_query($query);	
	}
	
	if($storeToText)
	{
		$recievedData = $_SERVER['QUERY_STRING'];
		//$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		//$moddedData = preg_replace("/[^A-Za-z0-9 ]/", '', $recievedData);
		file_put_contents($outputTextFileName, $recievedData."\n", FILE_APPEND);
		//file_put_contents($outputTextFileName, $actual_link."\n", FILE_APPEND);

}



?>