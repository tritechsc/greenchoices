<!DOCTYPE html>
<html>
<head><title>Green Choices</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
    box-sizing: border-box;
}
.row::after {
    content: "";
    clear: both;
    display: table;
}
[class*="col-"] {
    float: left;
    padding: 15px;
}
body{
background-color: #deebda;
}

html {
    font-family: system-ui , sans-serif;
    font-weight: 900;
}


.header {
    background-color: #84c1bc;
    color: #ffffff;
    padding: 1px;
}
.footer {
    background-color: #84c1bc;
    color: #ffffff;
    text-align: center;
    font-size: 12px;
    padding: 5px;
}
.menu ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}
.menu li {
    padding: 3px;
    margin-bottom: 3px;
    background-color: #0000ff;
    color: #ffffff;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
.menu li:hover {
    background-color: #f00;
}

a{
font-family: system-ui, sans-serif;
	color:#fff;
	text-decoration:none;
	font-size:18px;
}
.aside {
    background-color: #84c1bc;
    padding: 3px;
    color: #ffffff;
    text-align: center;
      font-weight: 900;
    font-size: 14px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

/* For mobile phones: */
[class*="col-"] {
    width: 100%;
}
//cwc
#content{
position:absolute;
left:10px;
top:10px;
}

div.label {
	background-color:#fff;
	color: #777;
	border-style: solid;
    border-color: #deebda #deebda;
    padding: 3px;

}
div.dataoutline{
	background-color:#84c1bc;
	color: #000;
	border-style: solid;
    border-color: #ddd #ddd;
    padding: 3px;

}


@media only screen and (min-width: 600px) {
    /* For tablets: */
    .col-m-1 {width: 8.33%;}
    .col-m-2 {width: 16.66%;}
    .col-m-3 {width: 25%;}
    .col-m-4 {width: 33.33%;}
    .col-m-5 {width: 41.66%;}
    .col-m-6 {width: 50%;}
    .col-m-7 {width: 58.33%;}
    .col-m-8 {width: 66.66%;}
    .col-m-9 {width: 75%;}
    .col-m-10 {width: 83.33%;}
    .col-m-11 {width: 91.66%;}
    .col-m-12 {width: 100%;}
}
@media only screen and (min-width: 768px) {
    /* For desktop: */
    .col-1 {width: 8.33%;}
    .col-2 {width: 16.66%;}
    .col-3 {width: 25%;}
    .col-4 {width: 33.33%;}
    .col-5 {width: 41.66%;}
    .col-6 {width: 50%;}
    .col-7 {width: 58.33%;}
    .col-8 {width: 66.66%;}
    .col-9 {width: 75%;}
    .col-10 {width: 83.33%;}
    .col-11 {width: 91.66%;}
    .col-12 {width: 100%;}

    sup {
vertical-align: super;
font-size: smaller;
}

sub{
vertical-align: sub;
font-size: smaller;
}

.imgleft {
    float: left;
}



</style>
</head>
<body>



<div class="header">
    <h3>  <a href = "http://tritechsc.ksd.org/greenchoices/" class= "menu" ><img src = "img/home.png"> </a>
&nbsp;Green Choices - App-Solutely: Tri-Tech Skills Center WSU Imagine Tomorrow Project <img src="img/1tree.png" /><a href = "codes/">CODES</a> <img src="img/1tree.png" /><a href = "admin/">ADMIN</a> <img src="img/1tree.png" /><br />
&nbsp;&nbsp;<span style= color:#a05a2c> &nbsp;&nbsp;Talmage Jacoson &nbsp;&nbsp;Nickolas Johnson &nbsp;&nbsp;Salvador Corona &nbsp;&nbsp;Brian Leon  </span>
</h3>
</div>

<div class="row">
<div class="col-6 col-m-9">
	  <?php
		$idselected = $_GET['id'];
		$photo = "photos/nophoto.png";
		$tree= "img/1tree.png";
		if(!$idselected){
			// html intro image and text
			?>
      <span style= color:#008000;c>&nbsp;&nbsp;Think about what you're purchasing and how it affects the ENVIRONMENT.</span><br />
      <br />&nbsp;&nbsp;NOTE: TOTAL CARBON DIOXIDE FOOTPRINT is for the deleivey of material.
			<?php
		}
		include 'db/db.php';
		include 'db/error.php';
		//if (!($connection = mysqli_connect($host,$user, $pass))) die("Could not connect to database");
		//	mysqli_select_db( $connection,"stream");
		$connection = mysqli_connect($host,$dbuser,$dbpass);
		//mysqli_select_db($connection,$dbname);
		mysqli_select_db($connection,$dbname);
		$sql = "select * from building.materials where id = $idselected";
		//SELECT * FROM `fooddata` WHERE food_id = 2001
		$result = mysqli_query ($connection,$sql);
		//$therows = mysqli_fetch_row($result);
		$therows = mysqli_num_rows($result);
		//echo "$therows items selected. <br />";//debug
		echo "<div id = content>";
		while ($row = mysqli_fetch_row($result)){
			$tree = "img/1tree.png";
			if (($row[14]) == 2)$tree = "img/2tree.png";
			if (($row[14]) == 3)$tree = "img/3tree.png";
			if (($row[14]) == 4)$tree = "img/4tree.png";
			if (($row[14]) == 5)$tree = "img/5tree.png";

      $photo = "photos/". $row[2]."_".$row[3].".png";

			echo "<div class = dataoutline>";
				echo "<div class =label >CATAGORY : ";
					echo "<span style=color:#000;font-weight:bold>$row[2] </span><img src = $photo><img src = $tree ></div>";
				echo "<div class =label >ID	: ";
					echo "<span style=color:#000;font-weight:bold>$row[3] </span></div>";
				echo "<div class =label >MATERIAL : ";
					echo "<span style=color:#000;font-weight:bold>$row[4] </span></div>";
				echo "<div class =label >LOCATION : ";
					echo "<span style=color:#000;font-weight:bold>$row[5] </span></div>";
				echo "<div class =label >DELIVERY METHOD : ";
					echo "<span style=color:#000;font-weight:bold>$row[6] </span></div>";
				echo "<div class =label >ECOLOGICAL IMPACT : ";
					echo "<span style=color:#000;font-weight:bold>$row[7] </span></div>";
				echo "<div class =label >DELIVERY DISTANCE : ";
					echo "<span style=color:#000;font-weight:bold>$row[8] </span></div>";
				echo "<div class =label >TOTAL CARBON DIOXIDE FOOTPRINT  : ";
					echo "<span style=color:#000;font-weight:bold>$row[9] </span></div>";
				echo "<div class =label >LABOR SOURCE HUMAN IMPACT : ";
					echo "<span style=color:#000;font-weight:bold>$row[10] </span></div>";
				echo "<div class =label >HAZARDOUS CHEMICALS : ";
					echo "<span style=color:#000;font-weight:bold>$row[11] </span></div>";
				echo "<div class =label >DURABILITY : ";
					echo "<span style=color:#000;font-weight:bold>$row[12] </span></div>";
				echo "<div class =label >R-VALUE RATING/IN  : ";
					echo "<span style=color:#000;font-weight:bold>$row[13] </span></div>";
				echo "<div class =label >RATING : ";
					echo "<span style=color:#000;font-weight:bold>$row[14] </span></div>";
				  echo "<div class =label >COMMENTS : ";
					echo "<span style=color:#000;font-weight:bold>$row[15] </span></div>";

				echo "$row[0] $row[1]  CONFIRMATION # $row[17]";

				echo "</div><br />";
		}
	echo "</div>";
		mysqli_close($connection);

?>

	  </p>

 </div>

<div class="col-3 col-m-12">
  <div class="aside">
MATERIAL CODES<br />
 <ul>
	 <li><a href= "index.php?id=1001" class= "menu">FLOORING:1001</a> </li>
	<li><a href= "index.php?id=1002" class= "menu">FLOORING:1002</a> </li>
	<li><a href= "index.php?id=1003" class= "menu">FLOORING:1003</a> </li>
	<li><a href= "index.php?id=1004" class= "menu">FLOORING:1004</a> </li>
	<hr />
	<li><a href= "index.php?id=2001" class= "menu">COUNTER TOPS:2001</a> </li>
	<li><a href= "index.php?id=2002" class= "menu">COUNTER TOPS:2002</a> </li>
	<li><a href= "index.php?id=2003" class= "menu">COUNTER TOPS:2003</a> </li>
	<hr />
  	<li><a href= "index.php?id=3001" class= "menu">INSULATION:3001</a> </li>
	<li><a href= "index.php?id=3002" class= "menu">INSULATION:3002</a> </li>
	<li><a href= "index.php?id=3003" class= "menu">INSULATION:3003</a> </li>
  <hr />
	<li><a href= "selectall.php" class= "menu">SHOW ALL DATA</a> </li>
  </ul>
  <br />
  </div>
</div>

</div>

<div class="footer">

<br /><span style= color:#008000;>&nbsp;&nbsp;Tri-Tech Skills - Center Construction Trades.</span>
</div>

</body>
</html>
