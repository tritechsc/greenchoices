<?php
session_start();
//$_SESSION['pagename'] = "form_index";
include '../db/db.php';
include '../db/error.php';
//include 'db/pushhits.php';

?>
<html><head>
	<title> CONFIRM DELETE </title>
	</head>
	<style>
	
	
	</style>
<body>
<pre>
<h1>

<?php
			$deletedate = $_GET['d'];
			echo " delete d $deletedate";
			$connection = mysqli_connect($host,$dbuser,$dbpass);
			mysqli_select_db($connection,$dbname);
			$sql_delete = "select * from building.materials where date_time =  ";
			$sql_delete = $sql_delete." '".$deletedate."';";
			echo "<hr /> $sql_delete  <hr />";
			$result = mysqli_query($connection,$sql_delete);
			while ($row = mysqli_fetch_row($result)){
				echo "CATAGORY : $row[2]   ID : $row[3]  $row[0] $row[1] $row[16] ";
				
		}
			mysqli_close($connection);
		
?>
</h1>
</pre>

</body>
</html>

