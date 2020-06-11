<?php

session_start();

if (!isset($_SESSION['f_id']))
{
  header('Location: index.html');
  exit();
}
else if(!isset($_SESSION['id'])||$_GET['ocena']==null)
{
  $wyslij = $_SESSION['f_id'];
  header("Location: Przyklad.php?id=$wyslij");
  exit();
}
else
{
  require_once "baza.php";
  
  $db = new PDO($dsn, $username, $password);
  
  $f_id = $_SESSION['f_id'];
  $id = $_SESSION['id'];
  $ocena = $_GET['ocena'];

  $rezultat = $db->query("DELETE FROM oceny WHERE id_filmu_serialu='$f_id' AND id_uzytkownika='$id'");
  

  $zapytanie = $db->prepare("INSERT INTO oceny (
    id_uzytkownika, id_filmu_serialu,ocena) VALUES (:id_uzytkownika, :id_filmu_serialu, :ocena)");
         
    
  $zapytanie->bindParam(':id_uzytkownika' , $id, PDO::PARAM_STR);
  $zapytanie->bindParam(':id_filmu_serialu' , $f_id, PDO::PARAM_STR);
  $zapytanie->bindParam(':ocena' , $ocena, PDO::PARAM_STR);
  $zapytanie->execute();

  $wyslij = $_SESSION['f_id'];
  header("Location: Przyklad.php?id=$wyslij");
  exit();
  
}

?>