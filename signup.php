<?php

?>

<html>
    <head>
        <title>Sign Up</title>
    </head>
    <body>
        <style type="text/css">
            #text{
                height: 25px;
                border-radius: 10px;
                padding: 4px;
                border: solid thin #aaa;
                width: 100%;
            }
            #button{
                padding: 10px;
                width: 100px;
                color:white;
                border-radius: 20px;
                background-color: lightblue;
                border:none;

            }
            #box{
               background-color: grey;
               margin:auto;
               width: 300px;
               border-radius: 20px;
               padding: 80px; 
               padding-left: 80px;
            }
        </style>
        <div id="box">
            <form method="post">
                <div style="font: size 20px; margin: 10px; color:white">SignUp</div>
                <input id="text" type="text" name="user_name"> <br><br>
                <input id="text" type="password" name="password"><br><br>
                <input id="button" type="Submit" value="SignUp"><br><br>

                <a href="login.php">Click Login</a><br><br>
            </form>
        </div>
    </body>
</html>