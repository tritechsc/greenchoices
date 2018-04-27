<?php
session_start();
//$_SESSION['pagename'] = "form_index";
include 'db/db.php';
include 'db/error.php';
//include 'db/pushhits.php';

?>

<html><head><title> Form Input </title>
<style>
body {margin: 0; padding: 0;
background-color: #ffffff;
color:#996633;
font-family:"Arial","sans-serif";color:#700070;font-size:14px;}
pre{margin: 0; padding: 0;font-family:"Arial","sans-serif";color:#000000;font-size:14px;}


#content{
font-family: Arial, Helvetica, sans-serif;
font-size: 14px;
color: #330099;
background-color:white;
position:absolute;
left:350px;
top:10px;
}

div.smalltext{
	font-family: Arial, Helvetica, sans-serif;
	color: #f00;
	    font-size: 8px;
}

</style>


</head>

<body>
<div id = "content">
MATERIAL DATA INPUT
<br />
<?php

$connection = mysqli_connect($host, $dbuser, $dbpass) or die("Could not connect to database server");
mysqli_select_db($connection,$dbname) or die("Could not select database");

//$result = mysql_query ("SELECT CURDATE();", $connection);
//	$row = mysql_fetch_row($result);$date = $row[0];

//	$result = mysql_query ("SELECT CURTIME();", $connection);
//	$row = mysql_fetch_row($result);$time = $row[0];


	$result = mysqli_query ($connection,"SELECT CURDATE();");
	$row = mysqli_fetch_row($result);
	$date = $row[0];

	$result = mysqli_query ($connection, "SELECT CURTIME();");
	$row = mysqli_fetch_row($result);
	$time = $row[0];


	echo "$date $time <br>";

	$str_time = $time;
	$str_date = $date;
	$timedate = $time." ".$date;
echo "$timedate <br>";


if(isset($_POST['submit'])){
	$last_input = 	$_POST['last'];
	$first_input = 	$_POST['first'];
	$catagory_input = $_POST['catagory'];
	$id_input = $_POST['id'];
	$material_input = $_POST['material'];
	$location_input = $_POST['location'];
	$delivery_input = $_POST['delivery'];
	$eco_impact_input = $_POST['eco_impact'];
	$delivery_distance_input = $_POST['delivery_distance'];
	$co2_footprint_input = $_POST['co2'];
	$labor_source_input = $_POST['labor'];
	$hazardous_chemicals_input= $_POST['hazardous'];
	$durability_input = $_POST['durability'];
	$rf_rating_input = $_POST['rf_rating'];
	$rating_input = $_POST['rating'];
	$comments_input = $_POST['comments'];
	}
/*
	echo "1 : $last_input <br />";
	echo "2 : $first_input<br />";
	echo "3 : $catagory_input <br />";
	echo "4 : $id_input <br />";
	echo "5 : $material_input<br />";
	echo "6 : $location_input <br />";
	echo "7 : $delivery_input<br />";
	echo "8 : $eco_impact_input <br />";
	echo "9 : $delivery_disctance_input <br />";
	echo "10: $co2_footprint_input <br />";
	echo "11: $labor_source_input <br />";
	echo "12: $hazardous_chemicals_input <br />";
	echo "13: $durability_input <br />";
	echo "14: $rf_rating_input <br />";
	echo "15: $rating_input <br />";
	echo "16: $comments_input <br />";

	CREATE TABLE IF NOT EXISTS `materials` (
  `last` varchar(64) NOT NULL,
  `first` varchar(1) NOT NULL,
  `catagory` varchar(16) NOT NULL,
  `id` varchar(16) NOT NULL,
  `material` varchar(64) NOT NULL,
  `location` varchar(64) NOT NULL,
  `delivery_method` varchar(64) NOT NULL,
  `eco_impact` varchar(64) NOT NULL,
  `delivery_distance` varchar(64) NOT NULL,
  `co2_footprint` varchar(64) NOT NULL,
  `labor_source` varchar(64) NOT NULL,
  `hazardous_chemicals` varchar(64) NOT NULL,
  `durability` varchar(64) NOT NULL,
  `rf_rating` varchar(64) NOT NULL,
	`rating` varchar(1) NOT NULL,
  `comments` text NOT NULL,
  `date_time` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


*/
//	echo "<hr />";
	$insert0 = "INSERT INTO `materials` (`last`, `first`, `food_type`, `food_id`, `fert_quantity`, `fert_type`, `pest_quantity`, `pest_type`, `pest_interval`, `water_quantity`, `water_type`, `water_interval`, `delivery_method`, `delivery_distance`, `delivery_waste`, `gmo`, `comments`, `date_time`) VALUES ";
	$insert1 = "('".$last_input; // 1
	$insert1 = 	$insert1."','".$first_input;   //2
	$insert1 = 	$insert1."','".$catagory_input;   //3
	$insert1 = 	$insert1."','".$id_input;   //4
	$insert1 = 	$insert1."','".$material_input;  //5
	$insert1 = 	$insert1."','".$location_input;  //6
	$insert1 = 	$insert1."','".$delivery_input;//7
	$insert1 = 	$insert1."','".$eco_impact_input;  //8
	$insert1 = 	$insert1."','".$delivery_distance_input;  //9
	$insert1 = 	$insert1."','".$co2_footprint_input;  //10
	$insert1 = 	$insert1."','".$labor_source_input;  //11
	$insert1 = 	$insert1."','".$hazardous_chemicals_input ;  //12
	$insert1 = 	$insert1."','".$durability_input;  //13
	$insert1 = 	$insert1."','".$delivery_distance_input;  //14
	$insert1 = 	$insert1."','".$rf_rating_input;  //15
	$insert1 = 	$insert1."','".$rating_input;  //16
	$insert1 = 	$insert1."','".$comments_input;  //17
	$insert1 = 	$insert1."','".$timedate;  //18
	$insert1 = 	$insert1."');";
	// 1 $last_input 2 $first_input  3 $food_input 4  $food_id_input 5   $fert_quantity_input  6 $fert_type_input
	//7 $pest_quantity_input  8 $pest_type_input  9 $pest_interval_input 10  $water_quantity_input
	//11 $water_type_input  12 $water_interval_input 13 $del_method_input 14  $del_distance_input
	//15 $del_waste_input  16 $gmo_input 17  $comments_input 18 date
	//('1', '2', 'apple', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '170326  0521');
	//echo "$str18 <br />";
	$sql_insert = $insert0.$insert1;
	//echo "<hr />";
	echo "DATA SUBMITTED $timedate;";
	//echo "<hr />";
	//$result = @ mysql_query($sql_insert, $connection)  or showerror();
	$result = @ mysqli_query($sql_insert, $connection);
	mysqli_close($connection);
?>
<form action="#" method="post">
	<pre>
	USER INPUT NAME <hr />
	LAST NAME 				<input type="text" name="last" maxlength="64">
	FIRST INITIAL				<input type="text" name="first" maxlength="1">
	CATAGORY				<select name="catagory">
											<option value="FLOORING">FLOORING</option>
											<option value="COUNTER_TOPS">COUNTER TOP</option>
											<option value="INSULATION">INSULATION</option>
									</select>
	ID 						<input type="text" name="id" maxlength="64">
	MATERIAL				<input type="text" name="material" maxlength="64">
	LOCATION				<input type="text" name="location" maxlength="64">
	DELIVERY_METHOD 		<input type="text" name="delivery" maxlength="64">
	ECO_IMPACT 				<input type="text" name="eco_impact" maxlength="64">
	DELIVERY_DISTANCE 		<input type="text" name="delivery_distance" maxlength="64">
	C02_FOOTPRINT			<input type="text" name="co2" maxlength="64">
	LABOR_SOURCE 			<input type="text" name="labor" maxlength="64">
	HAZARDOUS_CHEMICALS 	<input type="text" name="hazardous" maxlength="64">
	DURABILITY		 		<input type="text" name="durability" maxlength="64">
	RF_RATING		 		<input type="text" name="rf_rating" maxlength="64">
	RATING		 			<input type="text" name="rating" maxlength="1    ">
	COMMENTS   				<textarea rows="4" cols="50" name="comments" >Type comments or remove this this text.</textarea>
</pre>
<input type="submit" name="submit" value="Submit" />
</form>
<pre>
	<div class = "smalltext">

		post code
		$last_input = 	$_POST['last'];
	$first_input = 	$_POST['first'];
	$catagory_input = $_POST['catagory'];
	$id_input = $_POST['id'];
	$material_input = $_POST['material'];
	$location_input = $_POST['location'];
	$delivery_input = $_POST['delivery'];
	$eco_impact_input = $_POST['eco_impact'];
	$delivery_disctance_input = $_POST['deivery_distance'];
	$co2_footprint_input = $_POST['co2'];
	$labor_source_input = $_POST['labor'];
	$hazardous_chemicals_input= $_POST['hazardous'];
	$durability_input = $_POST['durability'];
	$rf_rating_input = $_POST['rf_rating'];
	$rating_input = $_POST['rating'];
	$comments_input = $_POST['comments'];


		Material type
ID
Location
Delivery method
Eco impact of waste
Delivery distance
Carbon dioxide footprint
Labor source human impact
Hazardous chemicals
Durability
RF rating/in



1	LAST NAME
2	FIRST INITIAL
3	CATEGORY
4	MATERIAL
5	ID
6	LOCATION
7	DELIVERY_METHOD
8	ECO_IMPACT
9	DELIVERY_DISTANCE
10	CARBON_DIOXIDE_FOOTPRINT
11	LABOR_SOURCE
12	HAZARDOUS_CHEMICALS
13	DURABILITY
14	RF_RATING
15	RATING
16 	COMMENTS
17	DATE AND TIME


CREATE TABLE IF NOT EXISTS `materials` (
  `last` varchar(64) NOT NULL,
  `first` varchar(1) NOT NULL,
  `catagory` varchar(16) NOT NULL,
  `id` varchar(16) NOT NULL,
  `material` varchar(64) NOT NULL,
  `location` varchar(64) NOT NULL,
  `delivery_method` varchar(64) NOT NULL,
  `eco_impact` varchar(64) NOT NULL,
  `delivery_distance` varchar(64) NOT NULL,
  `co2_footprint` varchar(64) NOT NULL,
  `labor_source` varchar(64) NOT NULL,
  `hazardous_chemicals` varchar(64) NOT NULL,
  `durability` varchar(64) NOT NULL,
  `rf_rating` varchar(64) NOT NULL,
	`rating` varchar(1) NOT NULL,
  `comments` text NOT NULL,
  `date_time` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


1	LAST NAME
2	FIRST INITIAL
3	CATEGORY
4	ID
5	MATERIAL
6	LOCATION
7	DELIVERY_METHOD
8	ECO_IMPACT
9	DELIVERY_DISTANCE
10	CARBON_DIOXIDE_FOOTPRINT
11	LABOR_SOURCE
12	HAZARDOUS_CHEMICALS
13	DURABILITY
14	RF_RATING
15 	COMMENTS
16	DATE AND TIME



		'
</div>
</pre>

</div>

</body>
</html>
