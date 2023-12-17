<!DOCTYPE html>
<html>
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
    <div class="log-reg">
      <div class="login container">
        <form
          method="post"
          action="<?php echo base_url('Auth/processLogin'); ?>"
          name="Login"
        >
          <h4>Login</h4>
          <input type="text" name="email" placeholder="Email" />
          <input type="password" name="password" placeholder=" Password" />
          <input type="submit" value="Login" id="submit" />
        </form>
        <a href="/register">Dont have an account?</a>
      </div>
    </div>

    <script src="sheet.js"></script>
  </body>
</html>
