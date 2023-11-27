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
    <div class="orderpage">
      <img src="/images/seating.png" alt="" />
      <div>
        <h2>Reservation Details</h2>
        <form class="formorder" action="#" method="post">
          <div class="form-group">
            <label for="movieName">Movie Name:</label>
            <select id="MovieName" name="MovieName" required>
              <option value="Barbie (2023)">Barbie (2023)</option>
              <option value="Far From Home">Far From Home</option>
              <option value="The Batman (2022)">The Batman (2022)</option>
              <option value="Fast and Furious 4">Fast and Furious 4</option>
              <option value="The Nun">The Nun</option>
              <option value="Bean The Movie">Bean The Movie</option>
              <option value="La La Land">La La Land</option>
            </select>
            <!-- Add more options as needed -->
          </div>

          <div class="form-group">
            <label for="seating">Seating:</label>
            <input type="text" id="seating" name="seating" required />
          </div>

          <div class="form-group">
            <label for="studio">Studio:</label>
            <input type="text" id="studio" name="studio" required value="4" />
          </div>

          <div class="form-group">
            <label for="showtimes">Showtimes:</label>
            <select id="showtimes" name="showtimes" required>
              <option value="10:00 AM">12.00-14.00</option>
              <option value="15:00 PM">15:00-17.00</option>
              <option value="18:00 PM">18.00 - 19.00</option>
              <!-- Add more options as needed -->
            </select>
          </div>

          <div class="form-group">
            <label for="price">Price:</label>
            <input
              type="number"
              id="price"
              name="price"
              value="45.000"
              required
            />
          </div>

          <button type="submit" onclick="submitForm()">BOOK NOW</button>
        </form>
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
    <script>
      function submitForm() {
        // You can perform additional actions here before showing the notification

        alert(
          "Reservation submitted successfully, Please make your payment at the Cinema!"
        ); // Display a simple notification
      }
    </script>
  </body>
</html>
