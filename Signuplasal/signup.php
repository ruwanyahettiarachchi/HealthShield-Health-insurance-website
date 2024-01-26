<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/signup.css">
    <title>Signup</title>
</head>
<body>
   
    
    <form action="includes/signup_in.php" style="border:1px solid #ccc" method="post">
        <div class="container">
          <h1>Sign Up</h1>
          <p>Please fill in this form to create an account.</p>
          <hr>
      
          <label for="First_Name"><b>First Name</b></label>
          <input type="text" placeholder="First name" name="f_name" required>

          <label for="Last_Name"><b>Last Name</b></label>
          <input type="text" placeholder="Last Name" name="l_name" required>

          <label for="User_Name"><b>User Name</b></label>
          <input type="text" placeholder="User Name" name="u_name" required>

          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
      
          <label for="psw-repeat"><b>Repeat Password</b></label>
          <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

          <label for="NIC"><b>NIC</b></label>
          <input type="text" placeholder="ID card Number" name="NIC" required>
      
          <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
          </label>
      
          <p>By creating an account you agree to our <a href="../Terms and conditions/Terms and condition.html" style="color:dodgerblue">Terms & Privacy</a>.</p>
      
          <div class="clearfix">
            <button type="button" class="cancelbtn">Cancel</button>
            <button type="submit" class="signupbtn" name="submit">Sign Up</button>
          </div>
        </div>
      </form>


</body>
</html>