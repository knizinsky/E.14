<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link href="styl.css" rel="stylesheet">
    <title>Hurtownia papiernicza</title>
</head>
<body>
    <div id="baner">
        <h1>W naszej hurtowni kupisz najtaniej</h1>
    </div>

    <div id="lewy">
        <h3>Ceny wybranych artykułów w hurtowni:</h3>

        <table>


            <?php

                $conn = mysqli_connect('localhost','root','','sklep') or die("Błąd połączenia");

                $sql = "select nazwa, cena from towary limit 4";

                $wynik = mysqli_query($conn, $sql);

                while($row = mysqli_fetch_assoc($wynik))
                {
                    echo '<tr><td>'.$row['nazwa'].'</td>'.'<td>'.$row['cena'].'</td></tr>';
                }

                mysqli_close($conn);

            ?>

        </table>
    </div>

    <div id="srodkowy">
        <h3>Ile będą kosztować Twoje zakupy?</h3>

        <form action="index.php" method="post">
        wybierz artykuł
        <select name="art">
            <option value="Zeszyt 60 kartek">Zeszyt 60 kartek</option>
            <option value="Zeszyt 32 kartki">Zeszyt 32 kartki</option>
            <option value="Cyrkiel">Cyrkiel</option>
            <option value=" Linijka 30 cm"> Linijka 30 cm</option>
            <option value="Ekierka">Ekierka</option>
            <option value="Linijka 50 cm">Linijka 50 cm</option>
        </select>
        <br><br>
        <label> liczba sztuk <input type="number" value="1" name="szt">  <br></label>
        <button>OBLICZ</button><br>

        <?php

            $conn = mysqli_connect('localhost','root','','sklep') or die("Błąd połączenia");

            $artykul = @$_POST['art'];
            $szt = @$_POST['szt'];
                        
            $sql = "SELECT cena FROM `towary` WHERE nazwa like '$artykul'";

            $wynik = mysqli_query($conn,$sql);

            while($row=mysqli_fetch_assoc($wynik))
            {
                echo round($row['cena']*$szt,1);
            }

            mysqli_close($conn);

        ?>

        </form>
    </div>

    <div id="prawy">
        <img src="zakupy2.png" alt="hurtownia" align="left">
        <h3>Kontakt</h3>
        <p>telefon:<br> 111222333<br> e-mail: <br><a href="hurt@wp.pl">hurt@wp.pl<a></p>
    </div>

    <div id="stopka">
        <h4>Witrynę wykonał: 12312312312</h4>
    </div>
    
</body>
</html>