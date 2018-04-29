<html>
<head>
<title>security</title>

<style>
body {margin: 0; padding: 0;
background-color: #000;
color:#fdf6e3;
font-family: system-ui, sans-serif;
}
pre{margin: 0; padding: 0;
font-family: system-ui, sans-serif;
	color:#71b9cf;font-size:18px;
}

a{
font-family: system-ui, sans-serif;
	color:#fdf6e3;
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
        if ($file != "." && $file != ".."&& $file != "index.php")
        {
            $thelist .= '<li><a href="'.$file.'" target = "_blank">'.$file.'</a></li>';
        }
    }
    closedir($handle);
    }
?>

<body>
<header><span style="color:#fff; background-color:#268bd2";>php directory listing</span></header>
<div id="list">
Security
<hr />
<p>Files:</p>
<ul>
<?php echo $thelist?>
</ul>

<hr />
</div>
<footer>
<center>

<?php
$colors = array("292a88" ,"425c9f","6981c7","8eb1e1","c2dcff","002b36","073642","586e75","657b83","839496","93a1a1","eee8d5","fdf6e3","b58900","cb4b16","dc322f","d33682","6c71c4","268bd2","2aa198","859900");
for ($n = 0; $n < 21; $n++){
	$text = "fff";
	if ($n == 4 || $n == 11 || $n == 12)$text = "000";
	echo "&nbsp;&nbsp;<span style=\"color:#$text; background-color:#$colors[$n]\";>&nbsp;&nbsp;$colors[$n]&nbsp;&nbsp;</span>&nbsp;&nbsp;";
	if ($n % 5 == 0 && $n != 0) echo "<br />";
}

?>
</center>
</footer>

</body>
</head>
