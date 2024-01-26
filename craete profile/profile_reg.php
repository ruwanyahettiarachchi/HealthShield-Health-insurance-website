<!DOCTYPE html>
<html lang="en">
<head>

    <title>Health Shield Health Insurance </title>
    <link rel="stylesheet" href="/style/profile.css">
    
   <style>/* CSS for Register Form */

body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
}

.logo {
  text-align: center;
  margin-bottom: 20px;
}

.profile-pic {
  margin-bottom: 20px;
}

.profile-pic .label {
  display: block;
  text-align: center;
  cursor: pointer;
  padding: 10px;
  background-color: #fff;
  border: 1px solid #ccc;
  border-radius: 5px;
  width: 200px;
  margin: 0 auto;
}

.profile-pic .glyphicon {
  display: block;
  font-size: 48px;
  margin-bottom: 5px;
}

.profile-pic input[type="file"] {
  display: none;
}

.container {
  margin-bottom: 20px;
}

input[type="text"],
input[type="date"],
select {
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
  margin-bottom: 10px;
}

input[type="text"]::placeholder,
input[type="date"]::placeholder,
select::placeholder {
  color: #999;
}

button[type="submit"] {
  padding: 10px 20px;
  background-color: #007bff;
  border: none;
  color: #fff;
  font-size: 16px;
  border-radius: 5px;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: #0069d9;
}

a {
  color: #007bff;
}

h1 {
  margin-bottom: 20px;
  color: #333;
}

.fs-6 {
  font-size: 14px;
}

.btn-primary {
  background-color: #007bff;
  color: #fff;
  border: none;
  padding: 6px 12px;
  border-radius: 4px;
  cursor: pointer;
}

.btn-primary:hover {
  background-color: #0069d9;
}

label {
  font-weight: bold;
  color: #555;
}

/* Colorful Styles */

.container {
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.logo img {
  width: 150px;
  height: 60px;
}

.container h1 {
  color: #007bff;
}

.container input[type="file"] {
  border-color: #007bff;
}

.container input[type="text"],
.container input[type="date"],
.container select {
  border-color: #ccc;
}

.container button[type="submit"] {
  background-color: #007bff;
}

.container a {
  color: #007bff;
}

.container label {
  color: #555;
}

/* Responsive styles */
@media (min-width: 768px) {
  form {
    max-width: 600px;
    margin: 0 auto;
  }
}
</style>
          
</head>
<body>
    <div class="logo">
        <img src="images/Health shield logo.jpeg" weight=60pxl height=150pxl alt="Health insurance logo"></div>

        <center>
            <h1>Personal Information</h1>
        </center>
        <form style="margin-left: 25px" action="includes/new.php" method="post">
        <div class="container"> </div>

        <div class="profile-pic">
            <label class="label" for="file" >
                <span class="glyphicon"></span>
                <span>Insert profile-pic image</span>
            </label>
         <input id="file" type="file" name="profile-pic" 
           onchange="loadFile(event)" />
            </div>
           <br><br>
           <label class="NIC"> 1.NIC</label><br><br>
            <input type="text" placeholder="ID card number" name="NIC" class="inputBox" required>

            <br><br>
            <label class="FirstName"> 2.First Name</label><br><br>
             <input type="text" placeholder="FirstName" name="FirstName" class="inputBox" required>
 
             <br><br>
             <label class="LastName">3.Last Name</label><br><br>
              <input type="text" placeholder="Last Name" name="LastName" class="inputBox" >
  
              <br><br>
              <label class="Type of plan">4.Type of plan</label><br><br>
              <select class="TypeOfPlan" name="TypeOfPlan">
                        <option>Select</option>
                        <option>Gold Package</option>
                        <option>Silver Package</option>
                        <option>Bronze Package</option>
                        <option>60+ Package</option>

                        </select>   
               <br><br>
               <label class="Address">5.Address </label><br><br>
                <input type="text" placeholder="Address Line 01" name="Address01" class="inputBox" required>
                <br><br>

                <input type="text" placeholder="Address Line 02" name="Address02" class="inputBox"required>
                <br><br>
                <label class="DateOfBirth">6.Date Of Birth</label><br><br>
                 <input type="date" placeholder="DateOfBirth" name="DateOfBirth" class="inputBox"required>
                 <br><br>

                 <label class="gender">7. Gender</label><br><br>
                     <select class="gender" name="Gender">
                         <option>Select</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>

                        </select>     
                  <br><br>
                  <label class="ContactNumber">8.contact Number </label><br><br>
                   <input type="text" placeholder="contact Number" name="contactNumber" class="inputBox" required>
         
                   <br><br>
                   <label class="Email">9.Email </label><br><br>
                    <input type="text" placeholder="Email" name="Email" class="inputBox" required>

                
                     <br><br>
                     <h1>Medical Information</h1>
                     <input type="file" class="UpdateMedical" id="proimg" accept="image/*" name="UpdateMedical" required/><br>
                     <label for="proimg" class="btn btn-primary fs-6 col-3 mt-2 offset-1">Update Medical</label>
                    <br><br>
                    <h1> Payment Information</h1>

                    <label class="Paymethod">1. Payment method</label>
                    <br><br>

                    <select class="Paymethod" name="Paymethod">
                        <option>Select</option>
                        <option>Debit Card</option>
                        <option>Bank Transfer</option>
                      
                        </select>
                        <br>
                 
    
                    <label class="PaymentFrequency">2. Payment frequency</label>
                    <br><br>
                    <select class="PaymentFrequency" name="PaymentFrequency">
                        <option>Select</option>
                        <option>Monthly</option>
                        <option>Annually</option>
                      
                        </select>


                    <br>

                    <h1 >
                        Terms and Condition
                    </h1>
                    
                      <a style="margin-left: 19px">Terms and Conditions</a>
                    <br><br>
                    <a style="margin-left: 19px" href="">Privacy Policy</a>
                    <br><br>
                    <input style="margin-left: 19px" type="radio" name="agree" id="agree" required/>
                    <label class="fs-6">I agree to the terms and conditions and the privacy policy</label>
                    <br><br><br>
                    <a href="../Webpage/Payment portal 1/paymentfinal.php">payment Protal</a>
                    <br><br>
                    <button type="submit" name="submit">Submit</button>

        




        </form>
</body>
</html>