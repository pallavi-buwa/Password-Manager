<center>
<?php
require 'includes/common.php';
if (!isset($_SESSION['email'])) 
    {   
        header('location: index.php');
    }
$s= mysqli_real_escape_string($con,$_POST['password']);?>
    <!DOCTYPE html>

<html>
    <head>
        
        <title>Password Suggester</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <br><br><br>
        <h1>Suggested Passwords</h1>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-info" >
                        <div class="panel-heading">
                            <h4>Your password:<?php echo $s ?></h4>
                        </div>
                        <div class="panel-body">

<?php

$l= strlen($s);
$up=0;
$lw=0;
$sp=0;
$nm=0;

 



function generate($lww,$upp,$spp,$nmm,$st,$s1)
{
    $st=$s1;
    if($upp==0)
        {
            $up_case =array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
            $st = $st.$up_case[rand() % 26];
            $st = $st.$up_case[rand() % 26];
        }
        if($lww==0)
        {
            $low_case =array("a","b","c","d","e","f","g","g","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
            $st = $low_case[rand() % 26].$st;
            $st = $low_case[rand() % 26].$st;
        }
        if($spp==0)
        {
            $spl_char = array("@","#","$","!");
            $st = $spl_char[rand() % 4].$st;
            $st = $spl_char[rand() % 4].$st;
        }
        if($nmm==0)
        {
            $num = array("0","1","2","3","4","5","6","7","8","9"); 
            $st = $st.$num[rand() % 10];
            $st = $st.$num[rand() % 10];
        }
        $final= str_shuffle($st);
        return $final;
}



    for($i = 0; $i < $l; $i++)
    {
        if ($s[$i] >= "a" && $s[$i] <= "z") 
        {
            $lw = 1; 
        }
        else if ($s[$i] >= "A" && $s[$i] <= "Z") 
        {
            $up = 1; 
        }
        else if ($s[$i] >= "0" && $s[$i] <= "9") 
        {
            $nm = 1; 
        }
        else
        {
            $sp = 1;
        }
    }
    
    if($up==1 && $lw==1 && $sp==1 && $nm==1 && $l>=8)
    {
        ?>Your password is strong!
         <div class="panel-footer"><p>Click <a href="create.php">here</a> to use and save this password.</p></div>               
        <?php
    }
    else 
    {
        ?><h5>Suggested Passwords:</h5><br>
            <ul><?php
        for($j=0; $j<5; $j++)
        {
            $str="";
            $suggest=generate($lw,$up,$sp,$nm,$str,$s);
            ?><li><?php echo $suggest;
            ?><br><?php
        }
        ?>   </div>      <div class="panel-footer"><p>Click <a href="create.php">here</a> to use and save one of these passwords</p></div>    
                    </div></div></div></div>
<?php
            
    }
        

    ?><a class="btn btn-danger" href="suggest.php" role="button">Try another suggestion</a></body></html></center>
