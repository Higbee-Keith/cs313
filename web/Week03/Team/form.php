<?php

$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$major = htmlspecialchars($_POST["major"]);
$comments = htmlspecialchars($_POST["comments"]);

$continents = $_POST["continent"];

?>

<!DOCTYPE html>
<head>
   <title>Week03 Team Confirmation</title>
</head>
<body>
<p>
You entered the following information: <br />
      Name: <?php echo $name; ?><br />
      Email: <?php echo $email; ?><br />
      Major: <?php echo $major; ?><br />
      Comments: <?php echo $comments; ?><br /><br />

      Continents Visited:<br />
      <?php
         foreach ($continents as $continent)
         {
            $visitedContinent = htmlspecialchars($continent);
            echo $visitedContinent . "<br />";
         }
      ?></p>
</body>
</html>