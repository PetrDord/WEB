<!DOCTYPE html>
<html lang="en">

<head>
  <title>DATUM</title>
  <link href="scss/style.css" rel="stylesheet" />
</head>
<header>
  <div class="cont">
    <h1>Chosse City</h1>
  </div>
</header>

<body>
  <main>
    
    <form action="index.php" method="get"> 
      <input type="checkbox" name="city" value="NY">
      <label for="country"> New York</label><br>
      <input type="checkbox" name="city" value="TK">
      <label for="country"> Tokyo</label><br>
      <input type="checkbox" name="city" value="LN">
      <label for="country"> London</label><br>
      <input type="checkbox" name="city" value="HK">
      <label for="country"> Hong Kong</label><br>
      <input type="checkbox" name="city" value="PR">
      <label for="country"> Prague</label><br>
      <div class="bt">
      <input type="submit" value="Submit">
      </div>
    </form>

    <p>
      <div class="time">
      <?php
      $c = $_GET['city'];
      if ($c == "NY") {
        date_default_timezone_set("America/New_York");
        echo date("d m h:i:s A");
      } elseif ($c == "TK") {
        date_default_timezone_set("Asia/Tokyo");
        echo date("d m h:i:s A");
      } elseif ($c == "LN") {
        date_default_timezone_set("Europe/London");
        echo date("d m h:i:s A");
      } elseif ($c == "HK") {
        date_default_timezone_set("Asia/Hong_Kong");
        echo date("d m h:i:s A");
      } elseif ($c == "PR") {
        date_default_timezone_set("Europe/Prague");
        echo date("d m h:i:s A");
      }
      ?>
      </div>
    </p>

  </main>
  <footer>

  </footer>
</body>

</html>