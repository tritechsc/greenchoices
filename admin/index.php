<html>
<head>
<title>ADMIN</title>
<style>
body {margin: 0; padding: 0;
background-color:#deebda;
color:#000;
font-family: system-ui, sans-serif;
}
pre{margin: 0; padding: 0;
font-family: system-ui, sans-serif;
	color:#71b9cf;font-size:18px;
}

a{
font-family: system-ui, sans-serif;
	color:#a05a2c;
	text-decoration:none;
	font-size:18px;
}

a:hover{
font-family: system-ui, sans-serif;
	color:#93a1a1;
	text-decoration:none;
	font-size:18px;
}

#list{
padding: 20px;
}

#bottom{
text-align: left;
font-size:18px;
color: #ff0000;
position:absolute;
top: 90%;
left :50px;
width: 1000px;
height: 800px;
z-index:0;

}

</style>


</head>



<?php
	$theList = array("*");

    if ($handle = opendir('.')) {
    while (false !== ($file = readdir($handle)))
    {
        if ($file != "." && $file != ".."&& $file != "index.php"&&$file != "db"&&$file != ".htaccess" && $file != "css")
        {
            $thelist .= '<li><a href="'.$file.'" target = "_blank">'.$file.'</a></li>';
        }
    }
    closedir($handle);
    }
?>

<body>
<header><span style="color:#fff; background-color:#268bd2";>
	 <a href = "http://tritechsc.ksd.org/greenchoices/" class= "menu" ><img src = "../img/home.png"></a>
	</span></header>
<div id="list">
ADMIM
<hr />
<p>Files:</p>
<ul>
<?php echo $thelist?>
</ul>

<hr />
</div>
<footer>
<center>


FOR CARL &nbsp;&nbsp;&nbsp; <a href = "https://www.youtube.com/watch?v=wupToqz1e2g">A Pale Blue Dot by Carl Sagan</a>

</center>
</footer>

</body>
</head>
