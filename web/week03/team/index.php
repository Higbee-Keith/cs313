<!DOCTYPE html>
<head>
   <title>Week03 Team Activity</title>
</head>
<body>
   <form action="form.php" method="post">
      <label>Name</label><br/>
      <input name="name" type="text"></input><br/><br/>

      <label>Email</label><br/>
      <input name="email" type="text"></input><br /><br />

      Major:<br />
      <input name="major" type="radio" value="cs">Computer Science</input><br />
      <input name="major" type="radio" value="wdd">Web Design & Development</input><br />
      <input name="major" type="radio" value="cit">Computer Information Technology</input><br />
      <input name="major" type="radio" value="ce">Computer Engineering</input><br /><br />

      <label>Comments</label><br />
      <textarea name="comments"></textarea><br /><br />

      <label>Continents visited:</label><br />
      <input type="checkbox" name="continent[]" value="North America">North America</input><br />
      <input type="checkbox" name="continent[]" value="South America">South America</input><br />
      <input type="checkbox" name="continent[]" value="Europe">Europe</input><br />
      <input type="checkbox" name="continent[]" value="Asia">Asia</input><br />
      <input type="checkbox" name="continent[]" value="Australia">Australia</input><br />
      <input type="checkbox" name="continent[]" value="Africa">Africa</input><br />
      <input type="checkbox" name="continent[]" value="Antarctica">Antarctica</input><br />

      <input type="submit" value="Submit">
   </form>
</body>
</html>