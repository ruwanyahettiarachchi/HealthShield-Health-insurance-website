<?php
include 'connect.php';
if(isset($_POST['Submit']))
{
   $NIC=$_POST['NIC'];
   $name=$_POST['name'];
   $email=$_POST['email'];
   $Mobile=$_POST['mobile'];
   $message=$_POST['Message'];
   
   $sql="INSERT INTO contact_us (NIC,name,email,mobile,Message) Values('$NIC', '$name','$email','$Mobile','$message')";
   
   $result = mysqli_query($conn, $sql);
   if($result){
   }
   else{
         echo "Failed: ";
  }
   } 
?>
<!doctype html>
<html lang="en">
  <title>Contact Us</title>
  <link rel="stylesheet" href="contact.css">
  <header>
      <div class="logo">

        <img src="images/logo.jpg" width="150px" height="160px;" alt="">  

    </div>
      <Nav class="navigation">
      <a href="home.html">Home</a>
                <a href="../contact us/user.php">Contact us</a>
                <a href="#">About us</a>
                <a href="../FAQs/FAQ.html">FAQs</a>
      </Nav>  
    </header>
  <body><center>
      <div class="block1">
      <form method="post">
         
        <h1>Contact Us</h1><br>
        <p><h3>Any question or remarks? Please write us a message.</h3></p>
        <br><br>
        <div class="container">
          <label>NIC:</label>
             <input type="text"  placeholder="Enter Your NIC" name="NIC" class="form-control">
        
           <label>Name:</label>
             <input type="text"  placeholder="Enter Your Name" name="name"class="form-control">
        
            <label>Email:</label>
              <input type="email"  placeholder="Enter Your Email" name="email" class="form-control">
        
             <label>Contact No:</label>
                <input type="text"  placeholder="+94123456789" name="mobile"class="form-control">
       
              <label>Your Message:</label>
                  <textarea type="message"  placeholder="Your message" name="Message"class="form-control"></textarea>
        <br> <div class="center">
          <button type="Submit" class="btn2" name="Submit">Submit</button>
          
        </div>
       </div>
      </form>
      <button class="b1"><a href="../contact us/display.php">display details</a></button>
      
    </div></center>
    
    <br><br><br><br>
    <footer>
    <div class="social_icon">
    <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
    <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
    <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
    <a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></div>

    <div class="f1">
     
      <li><a href="#">About us</a></li>
      <li><a href="../contact us/user.php">Contact us</a></li>
      <li><a href="../Terms and conditions/Terms and condition.html">Terms & conditions</a></li>
      <li><a href="../Privacy and policies/privacy and policy.html">Privacy & policy</a></li>
        <p>©2023 Health care Insurance| All Right Reserved</p>
   </div>
   
  </div>
</footer>
<br>


<script src="/home/js/Login js.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script
  </body>
</html>