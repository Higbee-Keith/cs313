<?php
   // default Heroku Postgres configuration URL
   $dbUrl = getenv('DATABASE_URL');

   if (empty($dbUrl)) {
      // example localhost configuration URL with postgres username and a database called cs313db
      $dbUrl = "postgres://postgres:1@localhost:5432/postgres";
   }

   $dbopts = parse_url($dbUrl);

   $dbHost = $dbopts["host"];
   $dbPort = $dbopts["port"];
   $dbUser = $dbopts["user"];
   $dbPassword = $dbopts["pass"];
   $dbName = ltrim($dbopts["path"],'/');

   try {
      $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
   }
   catch (PDOException $ex) {
      print "<p>error: $ex->getMessage() </p>\n\n";
      die();
   }
   
  /* try
   {
      $user = 'postgres';
      $password = '1';
      $db = new PDO('pgsql:host=127.0.0.1;dbname=postgres', $user, $password);
   }
      catch (PDOException $ex)
   {
      echo 'Error!: ' . $ex->getMessage();
      die();
   }*/
?>