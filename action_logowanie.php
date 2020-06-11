<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <title>Regulamin</title>
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


  if (!empty($_GET['email']) && !empty($_GET['haslo']))
  {
    try
    {
      require_once "baza.php";
  
      $db = new PDO($dsn, $username, $password);
  
      $email = $_GET["email"];
      $haslo = $_GET["haslo"];
      $Shaslo = md5($haslo);

      $email = htmlentities($email, ENT_QUOTES, "UTF-8");
      $haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8"); 

      $rezultat = $db->query("SELECT id FROM uzytkownicy WHERE email = '1@gmail.com' AND haslo = 'C92C0BABDC764D8674BCEA14A55D867D'");
      $ilu = $rezultat->rowCount();

      if($rezultat = $db->query("SELECT id FROM uzytkownicy WHERE email = '$email' AND haslo = '$Shaslo'"))
      {
        $ilu = $rezultat->rowCount();
        if($ilu>0)
        {
          echo "Udalo sie zalogowac";
          $wiersz = $rezultat->fetch(PDO::FETCH_ASSOC);
          $_SESSION['id'] = $wiersz['id'];

          header('Location: index.php');
          exit();
        }
        else echo "Podano zly email lub haslo";
      }
      
    }
    catch(PDOException $e)
    {
      echo 'Blad z polaczeniem: ' . $e->getMessage();
    }
  }
  else echo "Formularz logowanie nie zostal wypelniony";

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