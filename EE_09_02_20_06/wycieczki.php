<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wycieczki i urlopy</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <section class="banner">
        <h1>BIURO PODRÓŻY</h1>
    </section>
    <section class="left">
        <h2>KONTAKT</h2>
        <a href="mailto:biuro@wycieczki.pl">napisz do nas</a>
        <p>telefon: 555666777</p>
    </section>
    <section class="center">
        <h2>GALERIA</h2>
        <?php
        $polaczenie=mysqli_connect("localhost","root","","egzamin3");
        $zapytanie2="SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis";
        $wynik=mysqli_query($polaczenie,$zapytanie2);
        while($row = mysqli_fetch_array($wynik)){
                echo "<img src=".$row['nazwaPliku']." alt=".$row['podpis']." >";
            }
        mysqli_close($polaczenie);
            ?>
    </section>
    <section class="right">
        <h2>PROMOCJE</h2>
        <table>
            <thead>
                <tr>
                    <th>Jesień</td>
                    <th>Grupa 4+</th>
                    <th>Grupa 10+</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>5%</td>
                    <td>10%</td>
                    <td>15%</td>
                </tr>
            </tbody>
        </table>
    </section>
    <section class="blokzdanymi">
        <h2>LISTA WYCIECZEK</h2>
        <?php
        $polaczenie=mysqli_connect("localhost","root","","egzamin3");
        $zapytanie1="SELECT id,dataWyjazdu,cel,cena FROM wycieczki WHERE dostepna=1";
        $wynik=mysqli_query($polaczenie,$zapytanie1);
        while($row = mysqli_fetch_array($wynik)){
                echo " ".$row['id'].", ".$row['dataWyjazdu'].", ".$row['cel'].", cena: ".$row['cena']."<br>";
            }
        mysqli_close($polaczenie);
            ?>
    </section>
    <footer class="stopka">
        <p>Stronę wykonał: ŁK</p>
    </footer>
</body>
</html>