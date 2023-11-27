<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EaseTheater</title>
    <!-- STYLING -->
    <link rel="stylesheet" href="/css/styles.css" />
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Poppins:ital,wght@0,400;1,500&family=Roboto+Condensed&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="navbar">
      <div>
        <h1>EaseTheater</h1>
      </div>
      <div class="nav-item">
        <a href="/">Home</a>
        <a href="/orderpage">Order Now</a>
      </div>
    </div>
    <div class="moviedetail">
      <div class="img-poster">
        <?php $imagePath = '/images/poster/' . $selectedfilm['poster']; // Adjust the path accordingly?>
        <img src="<?php echo $imagePath; ?>" alt="poster" />
      </div>
      <div class="detail-film">
        <p class="desc"><?php echo $selectedfilm['deskripsi']; ?>
        </p>
        <p class="genre"><?php echo $selectedfilm['genre']; ?></p>
        <p class="genre"><?php echo $selectedfilm['durasi']; ?></p>
        <a class="backbutton genre" href="/">back</a>
      </div>
    </div>
    <div class="footer">
      <div>
        <h1>EaseTheater</h1>
      </div>
      <div>
        <p>Abdullah Nasih Jasir</p>
        <p>5025211111</p>

        <p>Rayhan Almer Kusumah</p>
        <p>5025211115</p>

        <p>Al-Ferro Yudisthira Putra</p>
        <p>5025211176</p>
      </div>
    </div>
  </body>
</html>
