<?php
   // start the session
   session_start();

   if (!empty($_POST))
   {     
      $height = htmlspecialchars($_POST["height"]);
      $foods = $_POST["foods"];
      $tech = htmlspecialchars($_POST["tech"]);
      $animal = htmlspecialchars($_POST["animal"]);

      $savedResults = fopen("results.txt", "a") or die("Unable to open file");
      fwrite($savedResults, $height . "\n");
      fwrite($savedResults, $tech . "\n");
      fwrite($savedResults, $animal . "\n");
      foreach ($foods as $food) {
         $goodFood = htmlspecialchars($food);
         fwrite($savedResults, $goodFood . "\n");
      }
      fclose($savedResults);
   }
?>

<!DOCTYPE html>
<head>
   <title>Week03 Results</title>
</head>
<body>
   <p>
   <?php
      $openFile = fopen("results.txt", "r") or die("File not opened");

      while (!feof($openFile)) {
         echo fgets($openFile) . "<br />";
      }
      fclose($openFile);
   ?>
   </p>
</body>
</html>