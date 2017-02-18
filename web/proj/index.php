<!DOCTYPE html>
<head>
   <title>Week05 Prove: Assignment - DB Access</title>
   <link rel="stylesheet" type="text/css" href="../../w3.css">
</head>
<body>
	<!--navbar-->
	<?php include_once("../../header.php"); ?>
   
   <div class="w3-container w3-blue">
      <h2>Journal</h2>
   </div>
   
   <div class="w3-layout-container w3-padding-large">
      <form class="w3-layout-cell w3-orange w3-round w3-section" action="results.php" method="post">
         <p>Search Tags</p>
         <input class="w3-input" type="text" name="tagname" placeholder="What tag would you like to search for?">
         <input class="w3-btn w3-round w3-padding-4" type="submit" value="Search Tags">
      </form>

      <form class="w3-layout-cell w3-green w3-round w3-section" action="results.php" method="post">
         <p>Search Dates</p>
         <input class="w3-input" type="date" name="date" placeholder="What date would you like to search for?">
         <input class="w3-btn w3-round w3-padding-4" type="submit" value="Search Dates">
      </form>

      <form class="w3-layout-cell w3-yellow w3-round w3-section" action="results.php" method="post">
         <p>Search Moods</p>
         <input class="w3-input" type="text" name="mood" placeholder="What mood would you like to search for?">
         <input class="w3-btn w3-round w3-padding-4" type="submit" value="Search Moods">
      </form>
   </div>
   
   <div class="w3-layout-container w3-padding-large">
         <form class="w3-layout-cell w3-section w3-gray w3-padding w3-round" action="results.php" method="post">
         <p>New Journal Entry</p>
         
         <textarea rows="5" cols="40" placeholder="Journal entry goes here..."></textarea>
         <!--<input class="w3-input" type="text" name="entry" placeholder="Journal entry goes here...">-->
         <br />

         <input class="w3-btn w3-round w3-blue" type="submit" value="Save Entry">
      </form>
      <div class="w3-layout-cell w3-section w3-padding">
         <h2><p>The 5 most recent entries</p></h2>
         <?php include_once("mostrecent.php");?>
      </div>
   </div>




</body>
</html>