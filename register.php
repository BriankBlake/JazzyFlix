<?php
    if(isset($_POST["submitButton"])) {
        echo "Form was submitted";
    }
?> 
<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to Jazzyflix</title>
        <link rel="stylesheet" type="text/css" href="assets/style/style.css" />
    </head>
    <body>

        <div class="signInContainer">

            <div class="column">
                <form method="POST"> 
                    <input type="text" name="firstName" placeholder="First name" required>

                    <input type="text" name="lastName" placeholder="Last name" required>

                    <input type="text" name="userName" placeholder="Username" required>

                    <input type="email" name="email" placeholder="Email" required>

                    <input type="email" name="email2" placeholder="Confirm email" required>

                    <input type="password" name="password" placeholder="Password" required>

                    <input type="password" name="password" placeholder="Confirm password" required>

                    <input type="submit" name="submitButton" value="SUBMIT" required>

                </form>

            </div>
        
        </div>    
       
    </body>
</html>