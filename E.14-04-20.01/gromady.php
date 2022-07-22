<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Gromady kręgowców</title>
    <link href="style12.css" rel="stylesheet">
</head>
<body>
    <div id="menu">
       <a href="gromada-ryby.html" class="odnosnik" id="od1">gromada ryb</a>
       <a href="gromada-ptaki.html" class="odnosnik" id="od2">gromada ptaków</a>
       <a href="gromada-ssaki.html" class="odnosnik" id="od3">gromada ssaków</a>
    </div>

    <div id="logo">
        <h2>GROMADY KRĘGOWCÓW</h2>
    </div>

    <div id="lewy">
        <?php

            #skrypt 1

            $conn = mysqli_connect("localhost",'root','','baza') or die("Błąd połączenia");

            $sql = "SELECT id, gromady_id, gatunek, wystepowanie FROM zwierzeta WHERE gromady_id = 4 or gromady_id = 5";
            
            $wynik = mysqli_query($conn, $sql);

            $gromada = "";

            while($row=mysqli_fetch_assoc($wynik))
            {
                if($row['gromady_id']==4)
                {
                    $gromada="ptaki";
                }
                else
                {
                    $gromada="ssaki";
                }

                echo   "<p>".$row['id'].". ".$row['gatunek']."</p>";
                echo   "<p>Występowanie: ".$row['wystepowanie'].", gromada $gromada</p>";
                echo "<hr>";
            }

            mysqli_close($conn);
        ?>
    </div>

    <div id="prawy">
        <h1>PTAKI</h1>

        <ol>
            <?php

                #skrypt 2

                $conn = mysqli_connect("localhost",'root','','baza') or die("Błąd połączenia");

                $sql = "SELECT gatunek, obraz from zwierzeta WHERE gromady_id = 4";
            
                $wynik = mysqli_query($conn, $sql);;

                while($row=mysqli_fetch_assoc($wynik))
                {
                    echo "<li><a href='".$row['obraz']."'>".$row['gatunek']."</a></li>";
                }

                mysqli_close($conn);
            ?>
        </ol>

        <img src="sroka.jpg" alt="Sroka
zwyczajna, gromada ptaki">
    </div>

    <div id="stopka">
    Stronę o kręgowcach przygotował: 1234567890
    </div>

</body>
</html>