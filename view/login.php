<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <link rel="stylesheet" href="../css/login_style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="main.css"><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="main">
      <div class="container a-container" id="a-container">
        <form class="form" id="a-form" method="POST" action="./signup_process.php">
          <h2 class="form_title title">Create Account</h2>
          <input class="form__input" type="text" placeholder="Firstname" name="firstname" required>
          <input class="form__input" type="text" placeholder="Lastname" name="lastname" required>
          <input class="form__input" type="text" placeholder="School" name="school" required>
          <input class="form__input" type="email" placeholder="Email" name="email" required>
          <input class="form__input" type="password" placeholder="Password" name="password" required>
          <!-- <input class="form__input" type="password" placeholder="Confirm Password" name="Confirm_Password" required>   -->
          <button class="take" style="    width: 180px;
    height: 50px;
    border-radius: 25px;
    margin-top: 50px;
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1.15px;
    background-color: #4B70E2;
    color: #f9f9f9;
    box-shadow: 8px 8px 16px #d1d9e6, -8px -8px 16px #f9f9f9;
    border: none;
    outline: none;"
          type="submit" name="sign_up">SIGN UP</button>
        </form>
      </div>
      <div class="container b-container" id="b-container">
        <form class="form" id="b-form" method="POST" action="./signin_process.php">
          <h2 class="form_title title">Sign in to Website</h2>
          <span class="error_msg"></span>
          <input class="form__input" type="email" placeholder="Email" name="email" required>
          <input class="form__input" type="password" placeholder="Password" required><a class="form__link">Forgot your password?</a>
          <button class="take" style="    width: 180px;
    height: 50px;
    border-radius: 25px;
    margin-top: 50px;
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1.15px;
    background-color: #4B70E2;
    color: #f9f9f9;
    box-shadow: 8px 8px 16px #d1d9e6, -8px -8px 16px #f9f9f9;
    border: none;
    outline: none;"
    type="submit" name="sign_in">SIGN IN</button>
        </form>  
      </div>
      <div class="switch" id="switch-cnt">
        <div class="switch__circle"></div>
        <div class="switch__circle switch__circle--t"></div>
        <div class="switch__container" id="switch-c1">
          <h2 class="switch__title title">Welcome Back !</h2>
          <p class="switch__description description">To keep connected with us please login with your personal info</p>
          <button class="switch__button button switch-btn">SIGN IN</button>
        </div>
        <div class="switch__container is-hidden" id="switch-c2">
          <h2 class="switch__title title">Hello Friend !</h2>
          <p class="switch__description description">Enter your personal details and start journey with us</p>
          <button class="switch__button button switch-btn">SIGN UP</button>
        </div>
      </div>
    </div>
    <script src="main.js"></script>
  </body>
</html>
<!-- partial -->
  <script  src="../js/script.js"></script>

</body>
</html>
