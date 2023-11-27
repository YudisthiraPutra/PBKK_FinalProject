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
    <div class="moviedetailpage">
      <div class="navbar">
        <div>
          <h1>EaseTheater</h1>
        </div>
        <div class="nav-item">
          <a href="/">Home</a>
          <a href="/orderpage">Order Now</a>
        </div>
      </div>
      <div class="section headline">
        <h1 class="tagline">
          Where Every Frame Tells a Story: Your Gateway to Cinematic Bliss.
        </h1>
      </div>

      <div class="section now-showing">
        <h1>NOW SHOWING</h1>
        <div class="carrousel">
          <?php if($ListFilm): ?>
          <?php foreach($ListFilm as $Film): ?>
          <div class="card">
            <?php $imagePath = '/images/poster/' . $Film['poster']; // Adjust the path accordingly?>
            <img src="<?php echo $imagePath; ?>" alt="poster" />
            <h5 class="title"><?php echo $Film['namafilm']; ?></h5>
            <a class="moreinfo" href="<?php echo base_url('/moviedetail/' . $Film['idfilm']); ?>">More Information</a>
          </div>
          <?php endforeach; ?>
          <?php endif; ?>
        </div>

      </div>

      <div class="section cta">
        <h1>ORDER TICKET NOW</h1>
        <button>BUY TICKET</button>
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
    </div>
  </body>
</html>
