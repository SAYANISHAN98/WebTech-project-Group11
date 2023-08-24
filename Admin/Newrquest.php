<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Request</title>
    <link rel="stylesheet" href="Dashboard.css?=<?php echo time(); ?> ">
    <link rel="stylesheet" href="application.css?=<?php echo time(); ?> ">
    <script defer src="https://kit.fontawesome.com/54a73c9ce9.js" crossorigin="anonymous"></script>
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

        <h2>Application Form</h2>

        <div class="applicationform">

            <form action="">
                <div class="application-input">
                    <h3>Registration Number</h3>
                    <p>2020/CSC/006</p>
                </div><!--application-input-->

                <div class="application-input">
                    
                    <h3>Full Name</h3>
                    <p>B.M.D Basnayaka</p>
                </div><!--application-input-->
                <div class="application-input">
                    
                    <h3>Gender</h3>
                    <p>Gneder</p>
                </div><!--application-input-->
                <div class="application-input">
                     <h3>Contac Number</h3>
                    <p>07845123</p>
                </div><!--application-input-->
                <div class="application-input">
                    <h3>Payment Clip</h3>
                    
                         </div><!--application-input-->
                         <img src="image\\paymentclip.jpg" alt="">

                         <div class="acceptrequestbutton">
                           
                            <a style=" background-color:red;"href="">Reject</a>
                            <a href="">Accept</a>
                         </div><!--acceptrequestbutton-->
            </form>
        </div><!--applicationform-->


    </div><!--mainContainer-->
</body>