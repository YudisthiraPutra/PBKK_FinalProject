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
    <div class="container op">
      <p class="op-title">ORDER PAGE</p>
      <form action="<?php echo base_url('Order/submitOrder'); ?>" method="post">
        <div class="main-container">
          <div class="left-container">
            <p>Contact Info</p>
            <div class="form-item">
              <label for="name">Full Name: </label>
              <input
                type="text"
                name="name"
                id="name"
                placeholder="enter your name here..."
                required
              />
            </div>
            <div class="form-item">
              <label for="mobilenumber">Mobile Number: </label>
              <input
                type="text"
                name="mobilenumber"
                id="mobilenumber"
                placeholder="enter your mobile number here..."
                required
              />
            </div>
            <div class="form-item">
              <label for="NIK">NIK: </label>
              <input
                type="text"
                name="NIK"
                id="NIK"
                placeholder="enter your NIK here..."
                required
              />
            </div>
          </div>
          <div class="right-container">
            <div class="right-1">
              <p>Reservation Dates</p>
              <div class="form-item">
                <label for="checkin">Check in: </label>
                <input
                  type="text"
                  name="checkin"
                  id="checkin"
                  placeholder="enter your check in date here..."
                  required
                />
              </div>
              <div class="form-item">
                <label for="checkout">Check out: </label>
                <input
                  type="text"
                  name="checkout"
                  id="checkout"
                  placeholder="enter your check out date here..."
                  required
                />
              </div>
            </div>
            <div class="right-2">
              <div class="form-item">
                <label for="roomtype">Room Type: </label>
                <select name="roomtype" id="roomtype" required>
                  <option value="" disabled selected>
                    Select your room type
                  </option>
                  <option value="KMR01">Celestial Suite</option>
                  <option value="KMR02">Stellar Retreat</option>
                  <option value="KMR03">Galaxy Grandeur</option>
                  <option value="KMR04">Nebula Oasis</option>
                  <option value="KMR05">Astral Haven</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="form-submition">
          <input type="submit" value="Continue" />
        </div>
      </form>
    </div>
  </body>
</html>
