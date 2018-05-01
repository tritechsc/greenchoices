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
color:#  000;
font-family:"Arial","sans-serif";color:#700070;font-size:14px;}
pre{margin: 0; padding: 0;font-family:"Arial","sans-serif";color:#000000;font-size:14px;}


#content{
font-family: Arial, Helvetica, sans-serif;
font-size: 14px;
color: #000;
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
	 <a href = "http://tritechsc.ksd.org/greenchoices/" class= "menu" ><img src = "../img/home.png"></a>
<?php
//echo " host dbuser dbpass <br />"; //echo "$host $dbuser $dbpass <br />";
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

	$str_time = $time;
	$str_date = $date;
	$timedate = $time." ".$date;
	echo "MATERIAL DATA INPUT ";
	echo "$timedate <br />";


if(isset($_POST['submit'])){
	echo "<h1><span style=color:#ff7f00;font-weight:bold>";
	echo "<hr /> DATA SUBMITTED $timedate <hr /></h1><h4></span><span style=color:#ff9f00;font-weight:bold>";
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

//	echo "<hr />";
	//$insert0 = "INSERT INTO `materials` (`last`, `first`, `food_type`, `food_id`, `fert_quantity`, `fert_type`, `pest_quantity`, `pest_type`, `pest_interval`, `water_quantity`, `water_type`, `water_interval`, `delivery_method`, `delivery_distance`, `delivery_waste`, `gmo`, `comments`, `date_time`) VALUES ";
	//('COLEMAN', 'C', 'Z', '1000', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'COMMENT', '0424');
	$insert0 = "INSERT INTO `materials` (`last`, `first`, `catagory`, `id`, `material`, `location`, `delivery_method`, `eco_impact`, `delivery_distance`, `co2_footprint`, `labor_source`, `hazardous_chemicals`, `durability`, `rf_rating`, `rating`, `comments`, `date_time`) VALUES ";
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
	$insert1 = 	$insert1."','".$rf_rating_input;  //15
	$insert1 = 	$insert1."','".$rating_input;  //16
	$insert1 = 	$insert1."','".$comments_input;  //17
	$insert1 = 	$insert1."','".$timedate;  //18
	$insert1 = 	$insert1."');";

	$sql_insert = $insert0.$insert1;
	//echo "<hr />";
//	echo "<h1><span style=color:#ff7f00;font-weight:bold>";
//	echo "<hr /> DATA SUBMITTED $timedate <hr /></h1><h4></span><span style=color:#ff9f00;font-weight:bold>";
 //echo "$sql_insert";
 	echo "</h4></span>";
//$result =  mysqli_query($sql_insert, $connection)  or showerror();
	 $result = mysqli_query($connection,$sql_insert);
	mysqli_close($connection);
?>
<form action="#" method="post">
	<pre>
	LAST NAME					<input type="text" name="last" maxlength="64">
	FIRST INITIAL			<input type="text" name="first" maxlength="1">
	CATAGORY				<select name="catagory">
											<option value="FLOORING">FLOORING</option>
											<option value="COUNTER_TOPS">COUNTER TOP</option>
											<option value="INSULATION">INSULATION</option>
											<option value="WINDOWS">WINDOWS</option>
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

	<div class = "smalltext">
		
	</div>

</div>

</body>
</html>
