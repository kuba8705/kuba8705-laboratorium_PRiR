<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <title>OcenyFilmow.pl</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
  <header>     
  <div class="topnav">
  <a href="index.php">OcenyFilmow.pl</a>
  <a href="filmow.php">Ranking Filmow</a>
  <a href="serialow.php">Ranking Seriali</a>
  <?php
  session_start();

  if (!isset($_SESSION['id']))
  {
    echo '<a href="logowanie.php">Zaloguj się/Zarejestruj się</a>';
  }
  else 
  {
    echo '<a href="dodawanie.php">Dodawanie serialu/filmu</a>';
    echo '<a href="profil.php">Profil</a>';
    echo '<a href="wylogowanie.php">Wyloguj sie</a>';
  }
  ?>
  <form class="Mtop" action="wyszukaj.php">
    <label for="wyszukaj">Wyszukaj film/serial:</label>
    <input type="text" id="wyszukaj" name="wyszukaj">
    <input type="submit" value="Wyszukaj">
  </form>
</div>

 </header>
 <main>

   <section>

  <?php

  require_once "baza.php";
  
  $db = new PDO($dsn, $username, $password);
  $id = $_GET['id'];
  $rezultat = $db->query("SELECT * FROM filmy_seriale WHERE id='$id'");
  $row = $rezultat->fetch(PDO::FETCH_ASSOC);

  $tytul = $row['tytul'];
  $opis = $row['opis'];

  echo "<h1>".$tytul."</h1><br>";

  echo "$opis<br><br>";
  

  if (isset($_GET['id'])||isset($_SESSION['id']))
  {
    $u_id = $_SESSION['id'];
    if($rezultat2 = $db->query("SELECT ocena FROM oceny WHERE id_uzytkownika = '$u_id' AND id_filmu_serialu = '$id'"))
    {
      echo "Moja ocena: ";

      $ilu = $rezultat2->rowCount();
      if($ilu>0)
      {
        $wiersz = $rezultat2->fetch(PDO::FETCH_ASSOC);
        echo $wiersz['ocena'];
      }
      else echo "Brak oceny";
    }
  }

  echo "<br><br>";
  echo "Ocena Urzytkowników: ";

  $rezultat3 = $db->query("SELECT ocena FROM oceny WHERE id_filmu_serialu='$id'");

  $ilosc = 0;
  $S_ocen = 0;

  if (is_array($rezultat3) || is_object($rezultat3))
  {
    foreach ($rezultat3 as $row)
    {
      $ilosc = $ilosc + 1;
      $S_ocen=$S_ocen+$row['ocena'];
    }

    if($ilosc==0) echo "Brak ocen";
    else 
    {
      $ocena = $S_ocen/$ilosc;
      echo $ocena;
    }
  }
  else echo "Brak ocen";

  $_SESSION['f_id'] = $id;

  ?>
  
      <form action="ocena.php?id">
        <input type="radio" id="1" name="ocena" value="1">
        <label for="1">Jedna Gwiazdka</label><br>
        <input type="radio" id="2" name="ocena" value="2">
        <label for="2">Dwie Gwiazdka</label><br>
        <input type="radio" id="3" name="ocena" value="3">
        <label for="3">Trzy Gwiazdek</label><br>
        <input type="radio" id="4" name="ocena" value="4">
        <label for="4">Cztery Gwiazdki</label><br>
        <input type="radio" id="5" name="ocena" value="5">
        <label for="5">Pieć Gwiazdek</label><br>
        <?php 
        
        if (isset($_GET['id'])||isset($_SESSION['id']))
        {
          echo '<input type="submit" value="Wyslij ocene">';
        }
        else echo "Tylko zalogowani mogą oceniać";
        ?>
      </form>

   </section>

 </main>


 <footer class = "row"> <a class ="col-sm" href="reklama.php">Reklama</a>
   <a class ="col-sm" href="regulamin.php">Regulamin</a>
   <a class ="col-sm" href="pomoc.php">Pomoc</a>
   <p class ="col-sm">© 1990-2020 by ... Inc.</p> </footer>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>


</html>
