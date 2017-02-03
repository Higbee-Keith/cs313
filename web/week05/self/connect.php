<?php
   try
   {
      $user = 'postgres';
      $password = '1';
      $db = new PDO('pgsql:host=127.0.0.1;dbname=postgres', $user, $password);
   }
      catch (PDOException $ex)
   {
      echo 'Error!: ' . $ex->getMessage();
      die();
   }
?>