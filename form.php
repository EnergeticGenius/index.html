<!DOCTYPE html>
<html lang="ukr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Bitcoin
      </title>
      <link rel="icon" type="icon" href="img/icon.ico">
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css" integrity="sha512-oHDEc8Xed4hiW6CxD7qjbnI+B07vDdX7hEPTvn9pSZO1bcRqHp8mj9pyr+8RVC2GmtEfI2Bi9Ke9Ass0as+zpg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
 <body>
      <header>
        <div class="container">
          <a href="#">
            <img src="images/logo.png" alt="logo">
          </a>
        </div>
        <div class="container">
          <nav>
            <ul>
              <li><a href="index.html">Main Page</a></li>
              <li>|</li>
              <li><a href="map.html">Map</a></li>
              <li>|</li>
              <li><a href="video.html">Some Videos</a></li>
              <li>|</li>
              <li><a href="form.html">Diagram</a></li>
            </ul>
          </nav>
        </div>
      </header>
        <div id="content">
            <section id="contents">
                <h2 style="font-size: 45px;margin-bottom:15px; margin-top:30px; font-family:'Times New Roman', Times, serif ;">coins</h2>
    
                <form action="form.php" method="post"> 
                    <p>How many you already have: <input type="text" name="a" /></p> 
                    <p>How many you want to buy now: <input type="text" name="b" /></p> 
                    <p>How many you want to book for the future: <input type="text" name="c" /></p>
                    <p><input type="submit" value = "Calculate"/></p> 
                    </form> 
                    
                </div>  
            </section>
            <?php
$a = $_POST["a"];
$b = $_POST["b"];
$c = $_POST['c'];
echo "<img src='diagramm.php?a=$a&b=$b&c=$c'>";
?>
            
        

    
</body>
</html>

