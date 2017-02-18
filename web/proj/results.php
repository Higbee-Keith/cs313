<?php
   if (!empty($_POST))
   {
      $temptag = htmlspecialchars($_POST["tagname"]);
      $tag = strtolower($temptag);

      $date = htmlspecialchars($_POST["date"]);

      $tempmood = htmlspecialchars($_POST["mood"]);
      $mood = ucfirst(strtolower($tempmood));
   }
?>

<!DOCTYPE html>
<head>
   <title>Results</title>
   <link rel="stylesheet" type="text/css" href="../../w3.css">
</head>
<body>
	<!--navbar-->
	<?php include_once("../../header.php"); ?>
   
   <div class="w3-container w3-blue">
      <h2>Results</h2>
   </div>

   <?php include_once("connect.php"); ?>

   <!--display results after successfully connecting-->
   <?php
      // get results if searched by tagname
      if (!empty($tag))
      {
         $statement = $db->query('SELECT jd.month, jd.day, jd.year, jt.tagname, je.entry
                                  FROM journal_entry je
                                  INNER JOIN journal_date jd ON je.dateid_fk = jd.dateid
                                  INNER JOIN journal_tag jt ON je.tagid_fk = jt.tagid
                                  WHERE jt.tagname = '."'".$tag."'");
                                  
         while ($row = $statement->fetch(PDO::FETCH_ASSOC))
         {
            echo 'Date: ' . $row['month'] . '/' . $row['day'] . '/' . $row['year'] . '<br/>';
            echo 'Tag: ' . $row['tagname'] . '<br/>';
            echo 'Entry: ' . $row['entry'] . '<br/>';
            echo '<br/>';
         };
      }

      // get results if searched by date
      if (!empty($date))
      {
         $statement = $db->query('SELECT jd.month, jd.day, jd.year, jt.tagname, je.entry
                                  FROM journal_entry je
                                  INNER JOIN journal_date jd ON je.dateid_fk = jd.dateid
                                  WHERE jd.month + "/" + jd.day + "/" + jd.year = '."'".$date."'");
                                  
         while ($row = $statement->fetch(PDO::FETCH_ASSOC))
         {
            echo 'Date: ' . $row['month'] . '/' . $row['day'] . '/' . $row['year'] . '<br/>';
            echo 'Entry: ' . $row['entry'] . '<br/>';
            echo '<br/>';
         };
      }

      // get results if searched by mood
      if (!empty($mood))
      {
         $statement = $db->query('SELECT jd.month, jd.day, jd.year, jm.mood, je.entry
                                  FROM journal_entry je
                                  INNER JOIN journal_date jd ON je.dateid_fk = jd.dateid
                                  INNER JOIN journal_mood jm ON je.moodid_fk = jm.moodid
                                  WHERE jm.mood = '."'".$mood."'");
                                  
         while ($row = $statement->fetch(PDO::FETCH_ASSOC))
         {
            echo 'Date: ' . $row['month'] . '/' . $row['day'] . '/' . $row['year'] . '<br/>';
            echo 'Mood: ' . $row['mood'] . '<br/>';
            echo 'Entry: ' . $row['entry'] . '<br/>';
            echo '<br/>';
         };
      }  
   ?>
</body>
</html>