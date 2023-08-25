<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Details</title>
    <link rel="stylesheet" href="../style//Dashboard.css?=<?php echo time(); ?> ">
    <link rel="stylesheet" href="../style//update.css?=<?php echo time(); ?> ">
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
                    <p><a href="../Dashboard.php">Home</a></p>

                </div><!--home-->
                <div class="navi n-addstudent">
                    <p><a href="../MainAddStudent.php">Add Student</a></p><!--#addstudentnavigationcheck-->
                </div><!--addstudent-->
                <div class="navi update">
                    <p style="border-bottom:5px solid yellow;"><a href="../MainUpdatedetails.php">Update Details</a></p><!--#updatenavigationcheck-->

                </div><!--update-->
                <div class="navi verify">
                    <p ><a href="../MainverifyRequest.php">Verify Request</a></p><!--#newrequestnavigationcheck-->
                </div><!--verify-->
                <div class="navi complains">
                    <p > <a href="../MainComplains.php">Manage Complains</a></p><!--#complainsavigationcheck-->

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
        <h2>Update Details</h2>
        <div class="updateform">

        <div class="studentform">
           
                    <form action="">
                        <div class="studentinput">
                            <p>Name</p>
                            <input type="text" name="st-inputdata-name">
                        </div><!--studentinput-->
                        <div class="studentinput">
                            <p>Registration Number</p>
                            <input type="text" name="st-inputdata-registration-number" placeholder="2020/CSC/001">
                        </div><!--studentinput-->
                        <div class="studentinput">
                            <p>NIC Number</p>
                            <input type="text" name="st-inputdata-nic">
                        </div><!--studentinput-->
                        <div class="studentinput">
                            <p>Address</p>
                            <input type="text" name="st-inputdata-address">
                        </div><!--studentinput-->
                        <div class="studentinput">
                            <p>Mobile Number</p>
                            <input type="text" name="st-inputdata-mobile">
                        </div><!--studentinput-->
                        <div class="studentinput">
                            <p>Medium</p>
                            <select name="st-inputdata-medium" id="">
                                <option value="English">English</option>
                                <option value="sinhala">Sinhala</option>
                                <option value="tamil">Tamil</option>
                            </select>
                        </div><!--studentinput-->
                        <div class="studentinput">
                            <p>Course Name</p>
                            <select name="st-inputdata-course" id="">
                                <option value="physical">Physical</option>
                                <option value="bio">Bio</option>
                                <option value="computer Science">Computer Science</option>
                            </select>
                        </div><!--studentinput-->
                        <div class="studentinput">
                            <p>Duration</p>
                            <select name="st-inputdata-duration" id="">
                                <option value="3 Years">3 Years</option>
                                <option value="4 Years">4 Years</option>

                            </select>
                        </div><!--studentinput-->
                        <div class="studentinput">
                            <p>Field Specication</p>
                            <textarea name="st-inputdata-specication" id="" cols="30" rows="10"></textarea>
                        </div><!--studentinput-->
                        <div class="studentinput">
                            <p>Overall GPA</p>
                            <input type="double" name="st-inputdata-gpa">
                        </div><!--studentinput-->
                        <div class="studentinput">
                            <p>Class</p>
                            <select name="st-inputdata-class" id="">
                                <option value="first class">First Class</option>
                                <option value="second class">Second First Class</option>
                            </select>
                        </div><!--studentinput-->

                        <div class="studentinput">
                            <p>Overall GPA</p>
                            <input type="double" name="st-inputdata-gpa">
                        </div><!--studentinput-->
                        <div class="studentinput">

                            <p>Effective Date</p>
                            <input type="date" name="st-inputdata-effectivedate">
                        </div><!--studentinput-->
                        <input type="submit" name="update-inputdata-submit" value="UPDATE">


                    </form>
                </div><!--studentform-->
        </div><!--updateform-->

    </div><!--mainContainer-->
</body>