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
    <div class="container">
      <div class="content-1">
        <h1>Grand Celestia</h1>
        <a href="/login">Login</a>
      </div>
      <div class="content-2">
        <div class="subcontent">
          <img src="/images/hotel-room-a.png" alt="room-image" />
        </div>
        <div class="subcontent">
          <?php if($Kamar): ?>
          <?php foreach($Kamar as $item): ?>
          <div class="card">
            <div class="room-name">
              <a href="<?php echo base_url('/roomdetail/' . $item['ID_Kamar']); ?>"><?php echo $item['Nama_Kamar']; ?></a>
            </div>
           
          </div>
          <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>

    <div class="container facil">
      <div class="facilities left">
        <div class="content">
          <div class="block"></div>
          <img src="/images/swimmingpool.png" alt="swimmingpool" />
        </div>
        <div class="content">
          <p>
            Refresh <br />
            yourself <br />
            during <br />
            your <br />
            stays
          </p>
        </div>
      </div>
      <div class="facilities right">
        <div class="content">
          <p>
            Fill <br />
            yourself <br />
            with <br />
            the <br />
            most <br />
            exquisite <br />
            food.
          </p>
        </div>
        <div class="content">
          <img src="/images/dining.png" alt="dining" />
        </div>
      </div>
      <div class="facilities left last">
        <div class="content">
          <img src="/images/ballroom.png" alt="ballroom" />
        </div>
        <div class="content">
          <div class="block2"></div>
          <p>
            Spacious, <br />
            Airy, <br />
            Elegant. <br />
            Accomodate <br />
            your <br />
            event.
          </p>
        </div>
      </div>
    </div>

    <div class="container review">
      <h1>Hear what people said about us!</h1>
      <div class="review-container">
          <?php if($UlasanData): ?>
          <?php foreach($UlasanData as $item): ?>
          <div class="review-card">
            <p class="name"><?php echo $item->pelanggan_name?></p>
            <p class="reviews"><?php echo $item->Ulasan?></p>
          </div>
          
          <?php endforeach; ?>
          <?php endif; ?>
      </div>
    </div>

    <div class="container cta">
      <h2 class="first">So, take a break from everything,</h2>
      <h2 class="second">Get your ideal vacation,</h2>
      <img src="/images/bali-cta.png" alt="bali" />
      <h2 class="third">with us.</h2>
      <hr />
      <div class="cta-button">
        <a href="/order">Book Online</a>
      </div>
      <hr />
    </div>

    <div class="container footer">
      <h1>Grand Celestia</h1>
      <ul>
        <li>CONTACT INFO</li>
        <li>MEMBERSHIP</li>
        <li>FAQS</li>
        <li>PRIVACY POLICY</li>
      </ul>
    </div>
  </body>
</html>
