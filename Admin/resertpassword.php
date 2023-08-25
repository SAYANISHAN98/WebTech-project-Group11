<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">

    <style> * {
            margin: 0;
            padding: 0;
            box-sizing: 0;
        }

        /* main class */
        .main {
            display: flex;
            width: 95%;
            height: 100vh;
            margin: auto;
            align-items: center;
            background-color: rgb(88, 172, 172);
            background-image: url();
            background-image: linear-gradient(to bottom, #dacff1, #f3f3f3, #c0c5d8);


        }

        /* reset-box */
        .reset-box {

            width: 45%;
            height: 600px;
            margin: auto;
            display: flex;
            background-color: rgb(200, 173, 220);
            font-family: 'Poppins', sans-serif;
            box-shadow: 4px 4px 10px rgba(114, 114, 114, 0.9);
            border-radius: 10px;
        }

        /* input-box */
        .input-box {
            width: 60%;
            height: 350px;
            margin: auto;
            align-items: center;
            background-color: #fff;
            font-family: 'Poppins', sans-serif;
           text-align: center;
           padding: 10px;
           border-radius: 10px;
        }

        /* .input-box h1*/
        .input-box h1 {
            margin-top: 10px;
            margin-left: 20px;
        }

        /* .input-box input*/
        .input-box form input ,a{
            width: 70%;
            height: 30px;
            margin-left: 20px;
            border-radius: 5px;

        }

        /* submit button */

        /* froget password */
        .input-box  a{
           text-decoration: none;
            color: black;
            font-weight: 700;
            text-align: center;

        }</style>
</head>
<body>
<div class="main">
        <div class="reset-box">

            <div class="input-box box1">
                <h1>Reset Password</h1><br><br>
                <form action="">

                <input type="password" name="oldplasswprd" placeholder="Old Password"><br><br>
                <input type="password" name="newpassword" placeholder="New password"><br><br>
                    <input type="password" name="confirm-password" placeholder="confirm Password"><br><br>
                    <input style=" 
                    height: 30px;
                    background-color: rgb(64, 8, 123);
                    color: white;
                  " type="submit" name="reset-save" value="Save"><br><br>
               
                </form>

            </div><!--reset-box box1---->
        </div><!--reset-box-->
    </div><!--main-->
</body>
</html>