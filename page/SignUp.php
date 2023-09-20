
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="icon" href="../Icon.PNG">
    <link rel="stylesheet" href="../css/signup.css">
</head>
<body>
    <form action="../phpcode/signupscript.php" method="post">
        <h2>Sign Up Here</h2>
        <?php if(isset($_GET['error'])) { ?>
            <p class="ErrorAlert"><?php echo $_GET['error']?></p>
        <?php } ?>
        <?php if(isset($_GET['success'])) { ?>
            <p class="SuccessAlert"><?php echo $_GET['success']?></p>

        <?php }
            ?>
        <label >Name</label>
        <?php if(isset($_GET['name'])) { ?>
            <input type="text" name="name" placeholder="Type your name here" value="<?php echo $_GET['name']?>"><br>
        <?php } else { ?>
            <input type="text" name="name" placeholder="Type your name here"><br>
            <?php }?>
            
        <label >Username</label>
        <?php if(isset($_GET['usersname'])) { ?>
            <input type="text" name="usersname" placeholder="Type your username here" value="<?php echo $_GET['usersname']?>"><br>
        <?php } else { ?>
            <input type="text" name="usersname" placeholder="Type your username here"><br>
            <?php }?>
        
        <label >Password</label>
        <input type="password" name="password" placeholder="Type your password here"><br>
        <label >Confirm your Password</label>
        <input type="password" name="repassword" placeholder="Confirm your password here"><br>
        <button type="submit">Sign Up</button>
        
        <a href="login.php">Already Have Account?</a>
    </form>
</body>
</html>