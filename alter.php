<?php

require 'includes/common.php';

if (!isset($_SESSION['email'])) 
    {
    header('location: index.php');
} ?>



<!DOCTYPE html>

<html>
    <head>
        <title>Passwords</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php
        $pass=$_GET['id'];
        $_SESSION['id']=$pass;
        $search="SELECT description, password FROM ".$_SESSION['u']." WHERE pid='$pass'";
        $res= mysqli_query($con, $search) or die(mysqli_error($con));
        $change= mysqli_fetch_array($res);
        $old_pass=$change['password'];
        $pt = openssl_decrypt($old_pass, "AES-128-ECB", KEY);
        $des=$change['description'];

?>
        
    <center>
        <br><br>
        <h1>Change Password</h1>
        <br>
        <p>Old description: <?php echo $des ?> </p>
        <br>
        <p>Old password: <?php echo $pt ?> </p>
        
        <div class="container">
            
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
        
        <form method="post" action="alter_script">
        
                        <div class="form-group">
                            <textarea name="n_description" placeholder="Enter new description" required = "true" rows="4" col="100"></textarea>
                        </div>
            
                        <div class="form-group">
                            <input type="password" class="form-control"  placeholder="New Password" name="n_password" required = "true">
                        </div>
                        
                        <div class="form-group">
                        <input type="password" class="form-control" placeholder="Confirm New Password" name="r_n_password" required = "true">
                        
                        <?php if(isset($_GET['mismatch']))
                                        {?>
                            
                                    
                                <?php echo $_GET['mismatch'];
                            unset($_GET['mismatch']);
                            ?>
                                    
                            <?php } ?>
                        </div>
                        
                        
                        
                        <button type="submit" name="Change" class="btn btn-primary">Change</button><br><br>
        </form>
                    <a class="btn btn-danger" href="passwords.php" role="button">Back to Dashboard</a>
                </div>
            </div>
        </div>
            
    </center>
</body>
</html>
