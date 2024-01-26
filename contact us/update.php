<?php
include 'connect.php';

if(isset($_GET['updateNIC']))
{
    $NIC=$_GET['updateNIC'];
} 
if (isset($_POST['submit']))
{
   $NIC=$_POST['NIC'];
   $name=$_POST['name'];
   $email=$_POST['email'];
   $Mobile=$_POST['mobile'];
   $message=$_POST['Message'];
   
   $updatesql="update contact_us set NIC='$NIC', name='$name',email='$email',mobile='$Mobile',Message='$message' where NIC='$NIC'";
   
   $result = mysqli_query($conn, $updatesql);
   if($result){ 
       echo "updated successfully";
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
  <body><center>
      <div class="block1">
      <form method="post" on submit="event.preventDefault();validateform()">
         
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
          <button type="Submit" class="btn2" name="submit">Update</button>
          
        </div>
       </div>
      </form>
      <a href="../contact us/display.php">display details </a>
    </div></center>
    
    <br><br><br><br>
  </body>
</html>