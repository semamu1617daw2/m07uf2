<html>
<head>
	<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
	<title>EXAMEN M07UF2 DAW2 2016-2017</title>
</head>
<body>
<?php
	$quantesTemperatures = $_REQUEST["nombreDeTemperatures"];
	$temps = $_REQUEST["temp"];
	$temp = array();
        $suma = 0;
	print "El nombre de temperatures &eacute;s ".$quantesTemperatures." : <BR><BR>\n";
	foreach( $temps as $key => $n ) {
	  //print "n : ".$n." , key : ".$key."<BR>\n";
	  $temp[$key] = $n;
	}
	for ($i=0;$i<$quantesTemperatures;$i++){
		print 'Temp['.($i+1).'] : '.$temp[$i].'<BR>';
		print "\n";
		$suma += $temp[$i];
	}
	print '<BR>Mitjana aritm&eacute;tica : '.$suma/$quantesTemperatures.'<BR>';
	print '<BR>';
?>
    <form action="index.php">
        <input type="submit" value="Retorna"/>
    </form>
</body>
</html>	