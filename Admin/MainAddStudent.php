<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add student</title>
    <link rel="stylesheet" href="style//Dashboard.css?=<?php echo time(); ?> ">
    <script defer src="https://kit.fontawesome.com/54a73c9ce9.js" crossorigin="anonymous"></script>
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<div class="header">
            <div class="navigation">
                <div class="navi home">
                    <p><a href="Dashboard.php">Home</a></p>

                </div><!--home-->
                <div class="navi n-addstudent">
                    <p style="border-bottom:5px solid yellow;"><a href="MainAddStudent.php">Add Student</a></p><!--#addstudentnavigationcheck-->
                </div><!--addstudent-->
                <div class="navi update">
                    <p ><a href="MainUpdatedetails.php">Update Details</a></p><!--#updatenavigationcheck-->

                </div><!--update-->
                <div class="navi verify">
                    <p><a href="MainverifyRequest.php">Verify Request</a></p><!--#newrequestnavigationcheck-->
                </div><!--verify-->
                <div class="navi complains">
                    <p> <a href="MainComplains.php">Manage Complains</a></p><!--#complainsavigationcheck-->

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
<div class="studentheader">
            <h2 class="addstudentheading">Add Student</h2>
            <!-- <a href="">form</a>
            <a href="">Attach file</a> -->
        </div><!--studentheader-->
        <div class="addstudent">

            <div class="choice">


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
                        <input type="submit" name="st-inputdata-submit" value="ADD DATA">


                    </form>
                </div><!--studentform-->
            </div><!--choice-->
            <div class="attachfile">
                <h3>Choose your XL file</h3>
                <form action="">
                    <input type="file" name="st-inputdata-file" value="">
                    <input type="submit" style="width: auto;" name="fileupload" value="UPLOAD">
                </form>


            </div><!--attachfile-->
        </div><!--addstudent-->
</body>
</html>