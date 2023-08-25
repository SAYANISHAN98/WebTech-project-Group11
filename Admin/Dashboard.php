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
                    <p style="border-bottom:5px solid yellow;" ><a href="Dashboard.php">Home</a></p>

                </div><!--home-->
                <div class="navi n-addstudent">
                    <p><a href="MainAddStudent.php">Add Student</a></p><!--#addstudentnavigationcheck-->
                </div><!--addstudent-->
                <div class="navi update">
                    <p><a href="MainUpdatedetails.php">Update Details</a></p><!--#updatenavigationcheck-->

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


      

    </div><!--mainContainer-->

</body>

</html>