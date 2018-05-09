<?php
session_start();
$_SESSION["thevalue"] = "one";
echo "Session variables are set.";

 ?>
<!DOCTYPE html>
<html>
<head><title> Delete Items</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../css/gcstyle.css" rel="stylesheet">
<style>
a{
	background-color: #cb4b16;
	color: #fff;

}
.even{
	background-color: #eee8d5;
	color: #000;
}

.odd{
	background-color:  #fdf6e3;
	color: #000;

}

.confirm{
	background-color:  #2aa198;
	color: #000;


}

</style>

</head>
<body>
<div class="row">
	<a href = "http://tritechsc.ksd.org/greenchoices/" class= "menu" ><img src = "../../img/home.png"> </a>
	&nbsp;&nbsp;<h1>DELETE AN ITEM BY CONFIRMATION NUMBER. </h1>
</div>
<div class = "row">
	<div class="col-m-12">
          <form  method="post">
		<?php
			include '../db/db.php';
			include '../db/error.php';
		//	$_SESSION[delete_this_item];
    if(empty($_POST['delete_item']))
      {echo " empty ";}else {echo "$delete_item";}
    //	if(!empty($_POST['relationships'])) {
    //		foreach($_POST['relationships'] as $check) {
//
			$delete_this_item = array();
			$connection = mysqli_connect($host,$dbuser,$dbpass);
			mysqli_select_db($connection,$dbname);
			$sql = "select * from building.materials";
			$result = mysqli_query ($connection,$sql);
			$therows = mysqli_num_rows($result);
			//echo "$therows items selected. <br />";//debug
			$count = 0;
			while ($row = mysqli_fetch_row($result)){
				$rowcolor = "even";
				if ($count % 2 == 0)$rowcolor = "odd";
				echo "<div class = $rowcolor>";
        echo " count $count";
        ?>
              &nbsp;   &nbsp;   &nbsp;   &nbsp;  <input type="radio" name="delete_item[<?php echo "$count" ?>]" value="DELETE">
                <button type="submit">DELETE ITEM</button>
          <?php
				echo "CATAGORY : $row[2] ID: $row[3]";
				echo " - CONFIRMATION NUMBER : $row[17] &nbsp;&nbsp;&nbsp;&nbsp; ";
				$delete_this_item[$count] = $row[17];
			//	$_SESSION[$thecount] = $count;
				//$_SESSION["delete_this_item[$count]"] = $row[17];
				$_SESSION["delete_item2"]=$delete_this_item[$count];
				echo "- CHECK - $delete_this_item[$count] ";




				$count = $count + 1;


		}
		mysqli_close($connection);

?>
  </form>
</div>
<pre>
NOTES:

04:51:51 2018-05-02


DELETE FROM `materials` WHERE `materials`.`date_time` = '04:51:51 2018-05-02';

</pre>
</div>




</body>
</html>
