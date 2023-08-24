<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Complains</title>
    <link rel="style//stylesheet" href="Dashboard.css?=<?php echo time(); ?> ">
    <link rel="style//stylesheet" href="ManageComplains.css?=<?php echo time(); ?> ">
    <script defer src="https://kit.fontawesome.com/54a73c9ce9.js" crossorigin="anonymous"></script>
     <!-- Boxicons CSS -->
     <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script>
        const icon = document.querySelector('profilebutton');
        const subMenu = document.querySelector('dropdown');

    </script>
</head>

<body>
    <div class="mainContainer">
        <div class="header">
            <div class="navigation">
                <div class="navi home">
                    <p><a href="Dashboard.php">Home</a></p>

                </div><!--home-->
                <div class="navi n-addstudent">
                    <p><a href="Dashboard.php.#studentheader">Add Student</a></p>
                </div><!--addstudent-->
                <div class="navi update">
                    <p><a href="Dashboard.php.#updateDetails">Update Details</a></p>

                </div><!--update-->
                <div class="navi verify">
                    <p><a href="">Verify Request</a></p>
                </div><!--verify-->
                <div class="navi complains">
                    <p> <a href="">Manage Complains</a></p>

                </div><!--complains-->
                <div class="navi profile">
                    <i id="profilebutton" class="fa-solid fa-user" style="color: #ffffff;"></i>
                    <div class="dropdown" id="dropdown">
                        <a href="">Profile</a>
                        <a href="">Setting</a>
                        <a href="">Logout</a>
                    </div>
                    <!--dropdown-->

                </div><!--profile-->
            </div><!--navigation-->

        </div><!--header-->
        <h2>Manage Complains</h2>
        <div class="manageComplains">
        
        <div class="compalainsBox">
            <h3>Complain ID</h3>
            <p>0000001</p>
        </div><!--compalainsBox-->
        <div class="compalainsBox">
            <h3>Registration Number</h3>
            <p>2020/CSC/000</p>
        </div><!--compalainsBox-->
        <div class="compalainsBox">
            <h3>Date</h3>
            <p>2023-08-24</p>
        </div><!--compalainsBox-->
        <div class="compalainsBox-content">
            <h3>content</h3>
            <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores facere minus hic velit culpa provident consectetur fuga doloremque quidem consequatur a, iure alias porro. Nam deserunt sapiente debitis ipsam suscipit.</p>
        </div><!--compalainsBox-->
       
        
        <form action="">
                        <div class="commentbox">
                            <input type="text" placeholder="      Comment">
                            <button id="messageSentButton">
                                <i class='bx bx-send'></i></button>
                        </div><!--commentbox-->

        
        </div><!--Complains-->

    </div><!--mainContainer-->
</body>