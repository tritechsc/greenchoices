<?php
session_start();
//echo "$_SESSION["delete_this_item"]";
echo $_SESSION["delete_this_item"];

?>
<!DOCTYPE html>
<html>
<head><title> Delete Items</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/gcstyle.css" rel="stylesheet">
</head>
<body>

<div class="row">
	<a href = "http://tritechsc.ksd.org/greenchoices/" class= "menu" ><img src = "../../img/home.png"> </a>
</div>
<div class = "row">
	<div class="col-m-12">
		<?php
			include 'db/db.php';
			include 'db/error.php';

			$connection = mysqli_connect($host,$dbuser,$dbpass);
			mysqli_select_db($connection,$dbname);
			$sql = "select * from building.materials";
			$result = mysqli_query ($connection,$sql);
			$therows = mysqli_num_rows($result);
			//echo "$therows items selected. <br />";//debug
			while ($row = mysqli_fetch_row($result)){
				echo "CATAGORY : $row[2]   ID : <a href = '$row[3]'>$row[3] </a> $row[0] $row[1] ";
				echo " TIME DATE  <a href = 'confirm-delete.php?d=$row[16]'>[ $row[16] ]</a> <br />";
		}
		mysqli_close($connection);

?>
</div>
<pre>
NOTES:

04:51:51 2018-05-02


DELETE FROM `materials` WHERE `materials`.`date_time` = '04:51:51 2018-05-02';

</pre>
</div>




</body>
</html>
