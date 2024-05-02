<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login Form Design | CodeLab</title>
      <link rel="stylesheet" href="style.css">

   </head>
   <body>
      <div class="wrapper">
         <div class="title">
            Login Form
         </div>

         <form action="loginphp.php" method="post">
            <div class="field">
               <input type="text" name="uname" required>
               <label>User name</label>
            </div>
            <div class="field">
               <input type="password" name="psw" required>
               <label>Password</label>
            </div>
            <div class="content">
               <div class="checkbox">
                  <input type="checkbox" id="remember-me">
                  <label for="remember-me">Remember me</label>
               </div>
               <div class="pass-link">
                  <a href="#">Forgot password?</a>
               </div>
            </div>
            <div class="field">
                <button type="submit" id="submett">Log in</button>
               <!-- <input type="submit" value="Login"> -->
            </div>
            <div class="signup-link">
               Not a member? <a href="signup.php">Signup now</a>
            </div>
         </form>
      </div>
   </body>
</html>