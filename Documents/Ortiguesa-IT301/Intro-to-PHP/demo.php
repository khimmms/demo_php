<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>
    
    <?php
    if(isset($_GET["success"]))
        {
    ?>
        <p style="background-color: green; color:white;"><?php echo $_GET["success"]?></p>
    <?php
        }
    ?>

    <?php
        if(isset($_GET["error"]))
        {
    ?>
        <p style="background-color: red; color:white;"><?php echo $_GET["error"]?></p>
    <?php
        }
    ?>

    <form action="output.php" method="POST">
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
        </div>
        
        <div>
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email">
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>

        <div>
            <label for="confirm_pass">Confirm Password</label>
            <input type="password" name="confirm_pass" id="confirm_pass"><br>
            
        </div>

            <input type="submit" value="Register">
    </form>
</body>
</html>