
<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>sign up Form</title>
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
      <div class="wrapper">
         <div class="title">
            Sign Up Form
         </div>
         <form action="registration.php" method="post">
            <div class="field">
               <input type="text" name="uname" id="uname" required>
               <label>User name</label>
            </div>
            <div class="field">
               <input type="password" name="psw" id="psw" required>
               <label>Password</label>
            </div>
           
            <div class="field">
                <button type="submit" id="submett">Sign Up</button>
            </div>
            
            <div class="signup-link">
                 <a href="log.php">back</a>
             </div>
         </form>
      </div>
   </body>
</html>