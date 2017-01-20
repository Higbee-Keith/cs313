<?php

$height = htmlspecialchars($_POST["height"]);
$foods = $_POST["foods"];
$tech = htmlspecialchars($_POST["tech"]);
$animal = htmlspecialchars($_POST["animal"]);

?>

<!DOCTYPE html>
<head>
   <title>Week03 Results</title>
</head>
<body>
   <p>
   You entered the following information: <br />
      Height: <?php echo $height; ?><br />
      Tech: <?php echo $tech; ?><br />
      Animal: <?php echo $animal; ?><br /><br />
      Foods:<br />
      <?php
         foreach ($foods as $food)
         {
            $goodFood = htmlspecialchars($food);
            echo $goodFood . "<br />";
         }
      ?>
   </p>
</body>
</html>