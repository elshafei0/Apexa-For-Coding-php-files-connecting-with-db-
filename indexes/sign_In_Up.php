<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign In / Sign Up</title>
  <link rel="stylesheet" href="../style.css" />
</head>

<body>

  <?php if ($signupSuccess): ?>
    <script>
      alert("Sign Up Successful! You can now log in.");
    </script>
  <?php endif; ?>

  <?php if ($loginError): ?>
    <script>
      alert("Incorrect email or password!");
    </script>
  <?php endif; ?>

  <center>
    <svg width="400" height="100" viewBox="0 0 400 100" xmlns="http://www.w3.org/2000/svg">
      <defs>
        <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%">
          <stop offset="0%" style="stop-color:#00C6FF;stop-opacity:1" />
          <stop offset="100%" style="stop-color:#0072FF;stop-opacity:1" />
        </linearGradient>
      </defs>
      <style>
        .text {
          font-family: 'Poppins', sans-serif;
          font-weight: 700;
          font-size: 40px;
          fill: url(#gradient);
          letter-spacing: 5px;

        }
      </style>
      <text x="20" y="70" class="text">APEXA</text>
    </svg>
  </center>

  <input type="checkbox" id="signup-active" hidden />
  <div class="wrapper">
    <div class="form-container">


      <!-- Sign In -->
      <form id="sign-in" method="post" action="index.php">
        <h2>Sign In</h2>
        <div class="input-field">
          <input type="email" name="signIn_email" id="si-email" placeholder=" " required />
          <label for="si-email">Email</label>
        </div>
        <div class="input-field">
          <input type="password" id="si-password" name="signIn_password" placeholder=" " required />
          <label for="si-password">Password</label>
        </div>
        <button class="btn" name="signIn_Btn" type="submit">Sign In</button>
        <div class="toggle">
          Don't have an account? <label for="signup-active">Sign Up</label>
        </div>
      </form>

      <!-- Sign Up -->
      <form id="sign-up" method="post" action="index.php">
        <h2>Sign Up</h2>
        <div class="input-field">
          <input type="text" id="su-name" name="signUp_fullName" placeholder=" " required />
          <label for="su-name">Full Name</label>
        </div>
        <div class="input-field">
          <input type="email" id="su-email" name="signUp_email" placeholder=" " required />
          <label for="su-email">Email</label>
        </div>
        <div class="input-field">
          <input type="tel" id="su-phone" name="signUp_phoneNumber" placeholder=" " required />
          <label for="su-phone">Phone Number</label>
        </div>
        <div class="input-field">
          <input type="password" id="su-password" name="signUp_password" placeholder=" " required />
          <label for="su-password">Password</label>
        </div>
        <div class="input-field">
          <input type="password" id="su-password2" placeholder=" " required />
          <label for="su-password2">Confirm Password</label>
        </div>
        <div>
          <input type="checkbox" id="su-terms" required />
          <label for="su-terms">I agree to the <a href="#">Terms & Conditions</a></label>
        </div>
        <button class="btn" name="signUp_Btn" type="submit">Sign Up</button>
        <div class="toggle">
          Already have an account? <label for="signup-active">Sign In</label>
        </div>
      </form>
    </div>
  </div>

</body>

</html>