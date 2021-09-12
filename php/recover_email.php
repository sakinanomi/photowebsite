<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  
                 
   

<link rel="stylesheet" href="../css/main.css">
    <title>signUp</title>
</head>
<body >

<?php

include '../dbcon.php';

if(isset($_POST['submit']))
{
    $email=$_POST['email'];


    $email_query="select * from signup where email='$email' ";
    $query=mysqli_query($con,$email_query);
    $emailcount=mysqli_num_rows($query);

    if($emailcount)
    {
        $userdata=mysqli_fetch_array($query);
        $username=$userdata['username'];
        $token=$userdata['token'];
        
        $subject="Reset Password for photowebsite";
        $body="Hi, $username Please click this link to reset your password
        http://localhost:90/photowebsite/php/reset_password.php?token=$token ";
        $sender_email="From: sakinanomi2011@gmail.com";
        if(mail($email,$subject,$body,$sender_email))
        {
            
            ?>

            <script>
               alert("Mail sent Please check");
               

            </script>


        <?php
           
        }
        else{
           ?>

        <script>
             alert("Mail could not be sent");
         </script>


           <?php
        }

    }
    else{
        ?>

        <script>
             alert("This email does not exist");
         </script>


    <?php
    }


}


?>

<div class="container">
        <form class="form " id="login" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">

            <h2 class="form__title">Recover your account</h2>
            <p>Enter the email address</p>

            <div class="form__input-group"> <!--since we are keeping the email as unique-->
                <input type="email" name="email" required class="form__input" autofocus placeholder="Email">
                
            </div>

            <button id="mailsent" class="form_button" type="submit" name="submit" >Send mail</button>

            <p id="success"style="background-color: #009579; color: white; display: none;">Please check your mail!</p>


        </form>


    </div>

   


    
</body>
</html>

