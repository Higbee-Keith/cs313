<?php
   // check for a session
   if (isset($_SESSION))
   {
      //go to results
      header("Location: results.php");
      die();
   }
?>
      
<!DOCTYPE html>
<head>
   <title>Week03 Prove: Assignment - PHP Survey</title>
   <link rel="stylesheet" type="text/css" href="../../w3.css">
</head>
<body>
	<!--navbar-->
	<?php include_once("header.php"); ?>
   <div class="w3-container w3-blue">
      <h2>Survey</h2>
   </div>
   <form class="w3-container" action="results.php" method="post">
      <p>How tall are you?</p>
      <input class="w3-radio" type="radio" name="height" value="Less than 5 feet">Less than 5 feet<br />
      <input class="w3-radio" type="radio" name="height" value="Between 5 feet and 6 feet">Between 5 feet and 6 feet<br />
      <input class="w3-radio" type="radio" name="height" value="Between 6 feet and 7 feet">Between 6 feet and 7 feet<br />
      <input class="w3-radio" type="radio" name="height" value="More than 7 feet">More than 7 feet<br /><br />

      <p>Which of these types of food do you like?</p>
      <input class="w3-check" type="checkbox" name="foods[]" value="burgers">Burgers<br />
      <input class="w3-check" type="checkbox" name="foods[]" value="cheese">Cheese<br />
      <input class="w3-check" type="checkbox" name="foods[]" value="pizza">Pizza<br />
      <input class="w3-check" type="checkbox" name="foods[]" value="tacos">Tacos<br /><br />
      
      <p>Do you use a Mac, PC, or both?</p>
      <input class="w3-radio" type="radio" name="tech" value="Mac">Mac<br />
      <input class="w3-radio" type="radio" name="tech" value="PC">PC<br />
      <input class="w3-radio" type="radio" name="tech" value="Both">Both<br /><br />

      <p>If you were an animal, which would you be?</p>
      <input class="w3-radio" type="radio" name="animal" value="dog">Dog<br />
      <input class="w3-radio" type="radio" name="animal" value="monkey">Monkey<br />
      <input class="w3-radio" type="radio" name="animal" value="snake">Snake<br />
      <input class="w3-radio" type="radio" name="animal" value="tiger">Tiger<br /><br />

      <input class="w3-btn w3-round" type="submit" value="Submit Results">
      <a href="results.php">Click here to see results</a>
   </form>
</body>
</html>