<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pics.css">
    <title>Welcome</title>
</head>
<body>
    <?php echo "<h1>Welcome " . $_SESSION['username'] ." , ". $_SESSION['email'] ."</h1>"; ?>
    <a href="logout.php">Logout</a>
    <h2 class="center">Download img for our wallpaper</h2>
    <div class="photo">
      <div class="gallery">
        <a target="_blank" href="./photo/slika_1.jpg">
          <img
            src="./photo/slika_1.jpg"
            alt="slika_1"
            width="600"
            height="400"
          />
        </a>
      </div>

      <div class="gallery">
        <a target="_blank" href="./photo/slika_2.jpg">
          <img
            src="./photo/slika_2.jpg"
            alt="slika_2"
            width="600"
            height="400"
          />
        </a>
      </div>

      <div class="gallery">
        <a target="_blank" href="./photo/slika_3.jpg">
          <img
            src="./photo/slika_3.jpg"
            alt="slika_3"
            width="600"
            height="400"
          />
        </a>
      </div>

      <div class="gallery">
        <a target="_blank" href="./photo/slika_4.jpg">
          <img
            src="./photo/slika_4.jpg"
            alt="slika_4"
            width="600"
            height="400"
          />
        </a>
      </div>

      <div class="gallery">
        <a target="_blank" href="./photo/slika_5.jpg">
          <img
            src="./photo/slika_5.jpg"
            alt="slika_4"
            width="600"
            height="400"
          />
        </a>
      </div>

      <div class="gallery">
        <a target="_blank" href="./photo/slika_6.jpg">
          <img
            src="./photo/slika_6.jpg"
            alt="slika_4"
            width="600"
            height="400"
          />
        </a>
      </div>
    </div>
</body>
</html>