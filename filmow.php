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
     <h1>Ranking Filmów</h1>
    
     <ol>
    <?php
    try
    {
      require_once "baza.php";
  
      $db = new PDO($dsn, $username, $password);  
      $rezultat = $db->query('SELECT * FROM filmy_seriale WHERE typ="film"');
      
      $ilu = $rezultat->rowCount();
      $ilosc2 = 0;

      $lista = array();

      if (is_array($rezultat) || is_object($rezultat))
      {
        foreach ($rezultat as $row)
        {
          $id_F = $row['id'];
          $rezultat2 = $db->query("SELECT ocena FROM oceny WHERE id_filmu_serialu='$id_F'");
          
          $ilosc = 0;
          $S_ocen = 0;

          $id1 = $row['id'];

          if (is_array($rezultat2) || is_object($rezultat2))
          {
            foreach ($rezultat2 as $row)
            {
              $ilosc = $ilosc + 1;
              $S_ocen=$S_ocen+$row['ocena'];
            }
          }

          if($ilosc==0) $ocena = 0;
          else $ocena = $S_ocen/$ilosc;

          $lista[$id1] = $ocena;
        }
        arsort($lista);
        while(list($klucz, $wartosc) = each($lista)) 
        {
          $rezultat3 = $db->query("SELECT * FROM filmy_seriale WHERE id='$klucz'");
          $row = $rezultat3->fetch(PDO::FETCH_ASSOC);

          $nazwa = $row['tytul'];

          echo "<li>";
          
          echo "<a href=Przyklad.php?id=";
          echo $klucz;
          echo ">";
          echo "$nazwa || ocena: ";
          if ($wartosc == 0) echo "Brak ocen";
          else echo "$wartosc";
          echo "</a>";

          echo "</li>";
        }

      }
    }
    catch(PDOException $e)
    {
      echo 'Blad z polaczeniem: ' . $e->getMessage();
    }
    echo "</ol>";
    ?>
    


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