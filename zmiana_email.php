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

  if(!isset($_SESSION['id']))
  {
    echo 'Nie jestes zalogowany';
  }
  else if($_GET["z_emaila1"]!=$_GET["z_emaila2"]) echo 'Emaile nie sa jednakowe';
  else if(empty($_GET['z_emaila1']) || empty($_GET['z_emaila2'])) echo 'Nie wypelniono wszystkich rubryk w formularzu';
  else
  {
    try
    {
      require_once "baza.php";
  
      $db = new PDO($dsn, $username, $password);
  
      $email = htmlentities($_GET['z_emaila1'], ENT_QUOTES, "UTF-8");
  
      $zapytanie = $db->prepare("UPDATE uzytkownicy SET email = :email WHERE id = :id");
  
      $zapytanie->bindParam(':email' , $email, PDO::PARAM_STR);
      $zapytanie->bindParam(':id' , $_SESSION['id'], PDO::PARAM_STR);
      $zapytanie->execute();
  
      echo "Zostal przypisany nowy email.";
      
    }
    catch(PDOException $e)
    {
      echo 'Blad z polaczeniem: ' . $e->getMessage();
    }


  }
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