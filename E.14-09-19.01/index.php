<!DOCTYPE html>
<html>
<head>
	<title>Dane o zwierzętach</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styl3.css">
</head>
<body>
	<div id="baner">
		<h1>ATLAS ZWIERZĄT</h1>
	</div>
	<div id="form">
		<h2>Gromady</h2>
		<ol>
			<li>Ryby</li>
			<li>Płazy</li>
			<li>Gady</li>
			<li>Ptaki</li>
			<li>Ssaki</li>
		</ol>
		<form action="index.php" method="POST">
			Wybierz gromadę<input type="number" name="num"> <input type="submit" value="WYŚWIETL">
		</form>
	</div>
	<div id="pl"><img src="zwierzeta.jpg" alt="dzikie zwierzęta"></div>
	<div id="ps">
		<?php 
		$connect =mysqli_connect('localhost','root','','baza');
		 
		if (isset($_POST['num']))
		{
			$num = $_POST['num'];
		
		   if ($num == 1)
	{
      echo "<h2>"."RYBY"."</h2>";
    }
    else if ($num == 2)
    {
      echo "<h2>"."PLAZY"."</h2>";
    }
    else if ($num == 3)
    {
      echo "<h2>"."GADY"."</h2>";
    }
    else if ($num == 4)
    {
      echo "<h2>"."PTAKI"."</h2>";
    }
    else if ($num == 5)
    {
      echo "<h2>"."SSAKI"."</h2>";
    }
    $sql="SELECT gatunek, wystepowanie FROM zwierzeta WHERE Gromady_id = $num";
    $query= mysqli_query($connect,$sql);
    while ($linia=mysqli_fetch_assoc($query))
    {
    	echo "<p>".$linia['gatunek']." ".$linia['wystepowanie']."</p>";
    }
}
		 mysqli_close($connect);
		?>
	</div>
	<div id="pp">
		<h2>Wszystkie zwierzęta w bazie</h2>
		<?php
		 $connect =mysqli_connect('localhost','root','','baza');
		 $sql="SELECT zwierzeta.id, zwierzeta.gatunek, gromady.nazwa FROM zwierzeta INNER JOIN gromady WHERE zwierzeta.Gromady_id = gromady.id";
		 $query= mysqli_query($connect,$sql);
		 while ($linia=mysqli_fetch_assoc($query))
		 {
		 	echo $linia['id']." ".$linia['gatunek'].","." ".$linia['nazwa']."<br>";
		 }
		 mysqli_close($connect);
		?>
	</div>
	<div id="stopka">
		<a href="http://atlas-zwierzat.pl" target="_blank">Poznaj inne  strony o zwierzętach</a>
		autor Atlasu zwierząt: 00000000000
	</div>

</body>
</html>