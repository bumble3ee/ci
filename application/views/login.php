<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <script src="template/script.js"></script>
    <link rel="stylesheet" href="template/style.css">
    <style>
      input[type=submit] {
        font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
    </style>
</head>
<body>
<div class="login-page">
  <div class="form">
    <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>

    <!-- login -->
    <form class="login-form" method="POST" action="index.php/service/login">
      <input type="text" placeholder="username" name="usr"/>
      <input type="password" placeholder="password" name="pw">
      <input type="submit" value="LOGIN" name="login">
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>
</body>
</html>