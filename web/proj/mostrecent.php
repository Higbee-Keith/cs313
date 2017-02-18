<?php
   include_once("connect.php");

   $statement = $db->query('SELECT jd.month, jd.day, jd.year, jt.tagname, jm.mood, je.entry
                                  FROM journal_entry je
                                  INNER JOIN journal_date jd ON je.dateid_fk = jd.dateid
                                  INNER JOIN journal_tag jt ON je.tagid_fk = jt.tagid
                                  INNER JOIN journal_mood jm ON je.moodid_fk = jm.moodid
                                  ORDER BY je.entryid DESC LIMIT 5');
                                  
         while ($row = $statement->fetch(PDO::FETCH_ASSOC))
         {
            echo 'Date: ' . $row['month'] . '/' . $row['day'] . '/' . $row['year'] . '<br/>';
            echo 'Tag: ' . $row['tagname'] . '<br/>';
            echo 'Mood: ' . $row['mood'] . '<br/>';
            echo 'Entry: ' . $row['entry'] . '<br/>';
            echo '<br/>';
         };   
?>