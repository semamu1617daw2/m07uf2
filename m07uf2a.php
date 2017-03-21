<html>
<head>
	<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
	<title>EXAMEN M07UF2 DAW2 2016-2017</title>
</head>
<body>
    <FORM method='post' action='m07uf2b.php'>
<?php
	$quantesTemperatures = $_REQUEST["nombreDeTemperatures"];
	print "El nombre de temperatures &eacute;s ".$quantesTemperatures."<BR>\n";
	for ($i=0;$i<$quantesTemperatures;$i++){
		print 'Temp['.($i+1).'] : <input name="temp[]" ><BR>';
		print "\n";
	}
?>
		<input type="hidden" name="nombreDeTemperatures" value="<?php print $quantesTemperatures; ?>">
		<input type ='submit' value='Tramet'>
    </FORM>
</body>
</html>	