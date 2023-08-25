<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Details</title>
    <link rel="stylesheet" href="style//Dashboard.css?=<?php echo time(); ?> ">
    <script defer src="https://kit.fontawesome.com/54a73c9ce9.js" crossorigin="anonymous"></script>
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<div class="header">
            <div class="navigation">
                <div class="navi home">
                    <p><a href="Dashboard.php?home=home">Home</a></p>

                </div><!--home-->
                <div class="navi n-addstudent">
                    <p><a href="MainAddStudent.php">Add Student</a></p><!--#addstudentnavigationcheck-->
                </div><!--addstudent-->
                <div class="navi update">
                    <p style="border-bottom:5px solid yellow;"><a href="MainUpdatedetails.php">Update Details</a></p><!--#updatenavigationcheck-->

                </div><!--update-->
                <div class="navi verify">
                    <p ><a href="MainverifyRequest.php">Verify Request</a></p><!--#newrequestnavigationcheck-->
                </div><!--verify-->
                <div class="navi complains">
                    <p > <a href="MainComplains.php">Manage Complains</a></p><!--#complainsavigationcheck-->

                </div><!--complains-->
                <div class="navi profile">
                    <i id="profilebutton" class="fa-solid fa-user" style="color: #ffffff;"></i>
                    <div class="dropdown" id="dropdown">
                        <a id="profilebutton" href="">Profile</a>
                        <a href="">Setting</a>
                        <a href="">Logout</a>
                    </div>
                    <!--dropdown-->

                </div><!--profile-->
            </div><!--navigation-->

        </div><!--header-->
<h2 class="updatedataheading">Update Deatials</h2>
        <div class="updateDetails" id="updateDetails">

            <div class="search">
                <div class="search-form">
                    <form id="search-formi">
                        <input type="text" id="search-query" placeholder="Registration Number :2020/CSC/000">
                        <button type="submit" id="submitbutton"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div><!--search-form-->

                <div class="search-result" id="search-results">
                    <p>2020/CSC/000</p>
                    <a href="subphpfile/update.php"> UPDATE</a>
                </div><!--search-results-->
            </div><!--search-->

            <div class="updateContent">
                <ul>
                    <li>
                        <div class="update-studentdataline">
                            <p>2020/csc/000</p>
                            <p>Sandeepa Bandara</p>
                            <a href="subphpfile/update.php">UPDATE</a>
                        </div><!--update-studentdataline-->
                    </li>
                    <li>
                        <div class="update-studentdataline">

                            <p>2020/csc/000</p>
                            <p>Sandeepa Bandara</p>
                            <a href="subphpfile/update.php">UPDATE</a>
                        </div><!--update-studentdataline-->
                    </li>
                    <li>
                        <div class="update-studentdataline">
                            <p>2020/csc/000</p>
                            <p>Sandeepa Bandara</p>
                            <a href="subphpfile/update.php">UPDATE</a>
                        </div><!--update-studentdataline-->
                    </li>
                    <li>
                        <div class="update-studentdataline">
                            <p>2020/csc/000</p>
                            <p>Sandeepa Bandara</p>
                            <a href="subphpfile/update.php">UPDATE</a>
                        </div><!--update-studentdataline-->
                    </li>
                    <li>
                        <div class="update-studentdataline">
                            <p>2020/csc/000</p>
                            <p>Sandeepa Bandara</p>
                            <a href="subphpfile/update.php">UPDATE</a>
                        </div><!--update-studentdataline-->
                    </li>
                </ul>
            </div><!--updateContent-->
        </div><!--updateDetails-->
</body>
</html>