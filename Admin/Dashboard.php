<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="style//Dashboard.css?=<?php echo time(); ?> ">
    <script defer src="https://kit.fontawesome.com/54a73c9ce9.js" crossorigin="anonymous"></script>
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script>
        const icon = document.querySelector('profilebutton');
        const subMenu = document.querySelector('dropdown');

        icon.addEventListener('click', () => {
            if (dropdown.style.display === 'block') {
                dropdown.style.display = 'none';
            } else {
                dropdown.style.display = 'block';
            }
        });

        document.getElementById('search-form').addEventListener('submit', function (event) {
            event.preventDefault(); // Prevent form submission
            const query = document.getElementById('search-query').value;
            searchDatabase(query);
        });


        const messageSentButton = document.getElementById('messageSentButton');

        messageSentButton.addEventListener('click', () => {
            // Perform actions when the button is clicked
            messageSentButton.textContent = 'Message Delivered';
            messageSentButton.style.backgroundColor = '#007bff';
        });



    </script>
</head>

<body>
    <div class="mainContainer">
        <div class="header">
            <div class="navigation">
                <div class="navi home">
                    <p><a href="">Home</a></p>

                </div><!--home-->
                <div class="navi n-addstudent">
                    <p><a href="#addstudentnavigationcheck">Add Student</a></p>
                </div><!--addstudent-->
                <div class="navi update">
                    <p><a href="#updatenavigationcheck">Update Details</a></p>

                </div><!--update-->
                <div class="navi verify">
                    <p><a href="#newrequestnavigationcheck">Verify Request</a></p>
                </div><!--verify-->
                <div class="navi complains">
                    <p> <a href="#complainsavigationcheck">Manage Complains</a></p>

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

        <div class="secondheader">
            <h1>ADMINISTRATOR - UNIVERSITY OF JAFFNA</h1>
        </div><!--secondheader-->
        <div class="cart">
            <a href="">
                <div class="box new">
                    <h2>New Request</h2>
                    <p>10</p>
                </div><!--box-->
            </a>
            <a href="">
                <div class="box verify">
                    <h2>Verify Request</h2>
                    <p>8</p>
                </div><!--box-->
            </a>
            <a href="">
                <div class="box reject">
                    <h2>Rejected Request</h2>
                    <p>2</p>
                </div><!--box-->
            </a>
            <a href="">
                <div class="box all">
                    <h2>All Request</h2>
                    <p>20</p>
                </div><!--box-->
            </a>
            <a href="#complainsavigationcheck">
                <div class="box compl">
                    <h2>New Complains</h2>
                    <p>3</p>
                </div><!--box-->
            </a>

        </div><!--cart-->
        <!--******************** add student data section**************** -->
        <div id="addstudentnavigationcheck"></div>
        <div class="studentheader" >
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

        <!-- *************update Deatils *********************** -->
        <div id="updatenavigationcheck"></div>
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
                    <p>B.M.D Basnayaka</p>
                    <a href="update.php"> UPDATE</a>
                </div><!--search-results-->
            </div><!--search-->

            <div class="updateContent">
                <ul>
                    <li>
                        <div class="update-studentdataline">
                            <p>2020/csc/000</p>
                            <p>Sandeepa Bandara</p>
                            <a href="update.php">UPDATE</a>
                        </div><!--update-studentdataline-->
                    </li>
                    <li>
                        <div class="update-studentdataline">

                            <p>2020/csc/000</p>
                            <p>Sandeepa Bandara</p>
                            <a href="update.php">UPDATE</a>
                        </div><!--update-studentdataline-->
                    </li>
                    <li>
                        <div class="update-studentdataline">
                            <p>2020/csc/000</p>
                            <p>Sandeepa Bandara</p>
                            <a href="update.php">UPDATE</a>
                        </div><!--update-studentdataline-->
                    </li>
                    <li>
                        <div class="update-studentdataline">
                            <p>2020/csc/000</p>
                            <p>Sandeepa Bandara</p>
                            <a href="update.php">UPDATE</a>
                        </div><!--update-studentdataline-->
                    </li>
                    <li>
                        <div class="update-studentdataline">
                            <p>2020/csc/000</p>
                            <p>Sandeepa Bandara</p>
                            <a href="update.php">UPDATE</a>
                        </div><!--update-studentdataline-->
                    </li>
                </ul>
            </div><!--updateContent-->
        </div><!--updateDetails-->
        
        <div id="newrequestnavigationcheck"></div>
        <h2 class="newrequestheading" >New Request</h2>
        <div class="varify">

            <div class="veifycontent">
                <div class="verifycontentline">
                    <div class="contetbox">
                        <p>2020/CSC/000</p>
                    </div><!--contetbox-->
                    <div class="contetbox">
                        <p>Raveesha Pathirana</p>
                    </div><!--contetbox-->
                    <div class="contetbox"><a href="">VIEW</a></div><!--contetbox-->

                </div><!--verifycontentline-->

                <div class="verifycontentline">
                    <div class="contetbox">
                        <p>2020/CSC/000</p>
                    </div><!--contetbox-->
                    <div class="contetbox">
                        <p>Raveesha Pathirana</p>
                    </div><!--contetbox-->
                    <div class="contetbox"><a href="">VIEW</a></div><!--contetbox-->

                </div><!--verifycontentline-->
                <div class="verifycontentline">
                    <div class="contetbox">
                        <p>2020/CSC/000</p>
                    </div><!--contetbox-->
                    <div class="contetbox">
                        <p>Raveesha Pathirana</p>
                    </div><!--contetbox-->
                    <div class="contetbox"><a href="">VIEW</a></div><!--contetbox-->

                </div><!--verifycontentline-->
                <div class="verifycontentline">
                    <div class="contetbox">
                        <p>2020/CSC/000</p>
                    </div><!--contetbox-->
                    <div class="contetbox">
                        <p>Raveesha Pathirana</p>
                    </div><!--contetbox-->
                    <div class="contetbox"><a href="">VIEW</a></div><!--contetbox-->

                </div><!--verifycontentline-->
                <div class="verifycontentline">
                    <div class="contetbox">
                        <p>2020/CSC/000</p>
                    </div><!--contetbox-->
                    <div class="contetbox">
                        <p>Raveesha Pathirana</p>
                    </div><!--contetbox-->
                    <div class="contetbox"><a href="">VIEW</a></div><!--contetbox-->

                </div><!--verifycontentline-->
                <div class="verifycontentline">
                    <div class="contetbox">
                        <p>2020/CSC/000</p>
                    </div><!--contetbox-->
                    <div class="contetbox">
                        <p>Raveesha Pathirana</p>
                    </div><!--contetbox-->
                    <div class="contetbox"><a href="">VIEW</a></div><!--contetbox-->

                </div><!--verifycontentline-->
                <div class="verifycontentline">
                    <div class="contetbox">
                        <p>2020/CSC/000</p>
                    </div><!--contetbox-->
                    <div class="contetbox">
                        <p>Raveesha Pathirana</p>
                    </div><!--contetbox-->
                    <div class="contetbox"><a href="">VIEW</a></div><!--contetbox-->

                </div><!--verifycontentline-->
                <div class="verifycontentline">
                    <div class="contetbox">
                        <p>2020/CSC/000</p>
                    </div><!--contetbox-->
                    <div class="contetbox">
                        <p>Raveesha Pathirana</p>
                    </div><!--contetbox-->
                    <div class="contetbox"><a href="">VIEW</a></div><!--contetbox-->

                </div><!--verifycontentline-->
            </div><!--veifycontent-->

        </div><!--varify-->

        <!--*********************complains section*****************-->
        <div id="complainsavigationcheck"></div>
        <h2 class="complainsheading">Manage Complains</h2>
        <div class="complainssection">
            <div class="complainbox">
                <div class="complainviewcontent">
                    <p>2020/CSC/000</p>
                    <p>Update MY Name</p>
                    <form action="">
                        <div class="commentbox">
                            <input type="text" placeholder="      Comment">
                            <button id="messageSentButton">
                                <i class='bx bx-send'></i></button>
                                
                        </div><!--commentbox-->


                    </form>

                </div><!--complainviewcontent-->
                <div class="complainviewbutton">
                    <a href="">VIEW</a>
                </div><!--complainviewbutton-->
            </div><!--complainbox-->
            <div class="complainbox">
                <!-- <p>dhanushka Basnyaka</p> -->

                <div class="complainviewcontent">
                    <p>2020/CSC/000</p>
                    <p>Update MY Name</p>
                    <form action="">
                        <div class="commentbox">
                            <input type="text" placeholder="      Comment">
                            <button id="messageSentButton">
                                <i class='bx bx-send'></i></button>
                        </div><!--commentbox-->


                    </form>

                </div><!--complainviewcontent-->

                <div class="complainviewbutton">
                    <a href="">VIEW</a>
                </div><!--complainviewbutton-->
            </div><!--complainbox-->
            <div class="complainbox">

            </div><!--complainbox-->
            <div class="complainbox">

            </div><!--complainbox-->
        </div><!--complains-->
    </div><!--mainContainer-->
</body>

</html>