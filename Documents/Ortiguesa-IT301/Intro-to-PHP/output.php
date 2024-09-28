<?php

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirmpass = $_POST["confirm_pass"];

        
        if(trim($username) == "" || empty($username))
        {
            echo "Username is Empty!";
        } else {
            echo "Username is: ". $_POST ["username"]."<br>";
        }

        if(trim($password) == trim($confirmpass))
        {
            header("location: demo.php?success=BUTI NAMAN INAYOS MO");
        } else {
            header("location: demo.php?error=DAMI MO KASING MALI");
        }
        

        /*echo "Username: ". $_POST ["username"]."<br>";
        echo "E-mail: ". $_POST ["email"]."<br>";
        echo "Password: ". $_POST ["password"]."<br>";
        echo "Confirm Password: ". $_POST ["confirm_pass"]."<br>";*/
    }
    else
    {
        echo "invalid method type";
    }
    
?>
