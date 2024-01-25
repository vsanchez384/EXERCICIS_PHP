<!-- CONNEXIÓ BASE DE DADES -->
<?php
   $servername = "db";
   $username = "root";
   $password = "politecnic";
   
   try {
     $conn = new PDO("mysql:host=$servername;dbname=prova", $username, $password);
     // set the PDO error mode to exception
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     echo "T'has connectat correctament <br>";
   } catch(PDOException $e) {
     echo "Connection failed2: " . $e->getMessage();
   }
?>