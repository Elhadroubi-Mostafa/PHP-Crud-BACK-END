<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div>
        <form action="signup.php" method="post">
          <div class="form">
            <h1>SIGN UP</h1>
            <label for="">Enter username</label>
            <input type="text" autocomplete=off name="username" placeholder="Enter your username">
          </div>
          <div class="form">
            <label for="">Enter password</label>
            <input type="password" autocomplete=off name="password" placeholder="Enter your password">
          </div>
          <div class="form">
            <label for="">Confirm password</label>
            <input type="password" autocomplete=off name="cpassword" placeholder="Confirm your password">
          </div>
          <button type="submit" name="signup">Sign up</button>
        </form>
      </div>
      <div>
        <form action="login.php" method="post">
          <div class="form">
            <h1>LOGIN</h1>
            <label for="">Enter username</label>
            <input type="text" autocomplete=off name="username" placeholder="Enter your username">
          </div>
          <div class="form">
            <label for="">Enter password</label>
            <input type="password" autocomplete=off name="password" placeholder="Enter your password">
          </div>
          <button type="submit" name="login">LOGIN</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>