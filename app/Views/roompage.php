<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Grand Celestia hotel</title>

    <link rel="stylesheet" href="/css/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cinzel&family=Courgette&family=Poppins:ital,wght@0,200;0,400;1,300&family=Source+Serif+4:ital,opsz,wght@0,8..60,600;1,8..60,400&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container rp">
      <p class="rp-roomname"><?php echo $selectedroom['Nama_Kamar']; ?></p>
      <div class="room-content">
        <div>
          <?php $imagePath = '/images/room/' . $selectedroom['Gambar_kamar']; // Adjust the path accordingly?>
          <img
            style="box-shadow: 4px 4px black"
            src="<?php echo $imagePath; ?>"
            alt="poster"
          />
        </div>
        <div class="rp-content-tag">
          <p class="rp-tagline">
            <?php echo $selectedroom['Tagline_Kamar']; ?>
          </p>
        </div>
      </div>
      <a class="backbutton" href="/">Other Suites</a>
    </div>
  </body>
</html>
