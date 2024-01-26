<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="adminPage.css" />
    <style>

    </style>
</head>

<body>

    <div class="wrapper">

        <div class="sidebar">
            <div class="profile">
                <img style="width: 100px; height: 100px" src="logo.jpg" alt="" />
                <h3>Sandunci Chamindi</h3>
                <p>Admin</p>
            </div>
            <ul>
                <li>
                    <a href="#" class="active">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Admin Home</span>
                    </a>
                </li>

                <li>
                    <a href="displaydetails.php">
                        <span class="icon"><i class="fas fa-users"></i></span>
                        <span class="item">View Admins</span>
                    </a>
                </li>
                <li>
                    <a href="adminupadate.php">
                        <span class="icon"><i class="fas fa-edit"></i></span>
                        <span class="item">update Admin</span>
                    </a>
                </li>
                <li>
                    <a href="addadmin.php">
                        <span class="icon"><i class="fas fa-plus"></i></span>
                        <span class="item"> Add Admin</span>
                    </a>
                </li>

                <li>
                    <a href="admindelete.php">
                        <span class="icon"><i class="fas fa-trash"></i></span>
                        <span class="item">Delete Admin</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="ima">

        <div style="margin-top: -180px; margin-left: 450px; position: absolute">
            <label style="font-size: 50px;" class="texto">Health Shield Health Insurance</label>
        </div>
        <div style="margin-top: -120px; margin-left: 700px; position: absolute">
            <label style="font-size: 35px;" class="texto">Admin Dashboard</label>
        </div>




        <div style="margin-top: 200px; margin-left: 300px">
            <label class="texto">Id Image</label>
            <div class="image"></div>
        </div>
        <button class="Sbutton3" style="margin-top: 20px; margin-left: 350px; position: absolute">
            Approve
        </button>
        <button class="Sbutton4" style="margin-top: 60px; margin-left: 350px; position: absolute">
            Reject
        </button>
        <div>

        </div>

        <div>
            <div style="margin-top: -224px; margin-left: 600px">
                <label class="texto">Medical</label>
                <div class="image"></div>
            </div>
            <div>
                <button class="Sbutton3" style="margin-top: 20px; margin-left: 650px; position: absolute">
                    Approve
                </button>
                <button class="Sbutton4" style="margin-top: 60px; margin-left: 650px; position: absolute">
                    Reject
                </button>
            </div>
        </div>
        <div>
            <div style="margin-top: -224px; margin-left: 900px">
                <label class="texto">Payment</label>
                <div class="image"></div>
            </div>
            <div>
                <button class="Sbutton3" style="margin-top: 20px; margin-left: 950px; position: absolute">
                    Approve
                </button>
                <button class="Sbutton4" style="margin-top: 60px; margin-left: 950px; position: absolute">
                    Reject
                </button>
            </div>
        </div>
        <div>
            <div style="margin-top: -224px; margin-left: 1200px">
                <label class="texto">claim</label>
                <div class="image"></div>
            </div>
            <div>
                <button class="Sbutton3" style="margin-top: 20px; margin-left: 1250px; position: absolute">
                    Approve
                </button>
                <button class="Sbutton4" style="margin-top: 60px; margin-left: 1250px; position: absolute">
                    Reject
                </button>
            </div>
        </div>




    </div>

</body>

</html>