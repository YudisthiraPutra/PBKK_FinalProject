<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Grand Celestia Hotel</title>

  <link rel="stylesheet" href="/css/styles.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cinzel&family=Courgette&family=Poppins:ital,wght@0,200;0,400;1,300&family=Source+Serif+4:ital,opsz,wght@0,8..60,600;1,8..60,400&display=swap" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
  <div class="container pp">
    <p class="op-title">PAYMENT PAGE</p>
    <div class="main-container">
      <div class="left-container">
        <h1>Please make your payment</h1>
        <p>
          218398341873198 <br />
          belongs to Grand Celestial
        </p>
      </div>
      <div class="right-container">
        <div class="right-1">
          <p>Reservation Dates</p>
          <div class="form-item">
            <label for="checkin">Check in: </label>
            <!-- Display the checkin value received from the /payment page -->
            <input type="text" name="checkin" id="checkin" placeholder="enter your check in date here..." value="<?= esc($checkin) ?>" readonly required />
          </div>
          <div class="form-item">
            <label for="checkout">Check out: </label>
            <!-- Display the checkout value received from the /payment page -->
            <input type="text" name="checkout" id="checkout" placeholder="enter your check out date here..." value="<?= esc($checkout) ?>" readonly required />
          </div>
        </div>
        <div class="right-2">
          <div class="form-item">
            <label for="roomtype">Total: </label>
            <!-- Display the roomtype value received from the /payment page -->
            <input type="text" name="roomtype" id="roomtype" placeholder="enter your room type here..." value="RP <?= esc($roomtype) ?>" readonly required />
          </div>
        </div>
      </div>
    </div>
    <div class="form-submition">
      <a href="#" onclick="continueAction()">Continue</a>
    </div>

    <script>
     function continueAction() {
        // Your JavaScript logic here
        Swal.fire({
          icon: 'success',
          title: 'Thank you!',
          text: 'Your payment has been submitted successfully.',
        }).then(() => {
          // Redirect the user to the desired page
          window.location.href = '/';
        });
      }
    </script>
  </div>
</body>
</html>
