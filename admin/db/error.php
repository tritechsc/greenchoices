<?php
function showerror()
	{
	//	die("<h1>Input error. . > error</a>");
		die("Input error. .".mysqli_errno(). " : ".mysqli_error());
	}
?>
