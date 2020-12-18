<?php
require 'includes/common.php';
if (!isset($_SESSION['email'])) 
    {
    header('location: index.php');
} 

if(isset($_SESSION['change']))
    {
        echo '<script>alert("Details changed successfully!")</script>';
        unset($_SESSION['change']);
    }
    
    if(isset($_SESSION['new']))
    {
        echo '<script>alert("Password saved successfully!")</script>';
        unset($_SESSION['new']);
    }
    
    if(isset($_SESSION['register']))
    {
        echo '<script>alert("Account created successfully!")</script>';
        unset($_SESSION['register']);
    }
     
       
                                 
?>
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
        
    <br><center><h1>Dashboard</h1></center><?php
        
        $temp=$_SESSION['u'];
        
        
        $selectq="SELECT * FROM ".$temp;
        $selectq_result= mysqli_query($con, $selectq) or die(mysqli_error($con));
        $num_rows= mysqli_num_rows($selectq_result);
        if($num_rows==0)
            {?><center><?php
            echo "Store new passwords to view them here!";
            ?> <br><br><a class="btn btn-primary" href="create.php" role="button">Save passwords</a>
            <br><br><a class="btn btn-primary" href="logout.php" role="button">Logout</a> </center><?php
        }
        else 
        {
            ?>       
  
        <br>
        <br>
        <br>
        <div class="container">
            <div class="table-responsive">
                <center>
                
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th>Serial Number</th>
                            <th>Description</th>
                            <th>Password</th>
                        </tr>
                        <?php 
                         while ($row = mysqli_fetch_array($selectq_result))
            {
                        $plaintext = openssl_decrypt($row['password'], "AES-128-ECB", KEY);
                        echo "<tr> <td>".$row['pid']."</td><td>".$row['description']."</td><td>".$plaintext."</td><td><a href='alter.php?id=".$row['pid']."'>Change</a></td></tr>";
            }           
                        
                           ?> 
                            
                        
                    </tbody>
                </table>    
           <br><br><a class="btn btn-primary" href="create.php" role="button">Save passwords</a>
           <br><br><a class="btn btn-danger" href="suggest.php" role="button">Password suggester</a>
           <br><br><a class="btn btn-primary" href="logout.php" role="button">Logout</a>
                </center>
            </div>
        </div>          
        <?php } ?>       
                        
                  
    </body>
</html>


