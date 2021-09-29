<?php
session_start();
?>

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

    
        if(isset($_GET['token']))
        {
            $token=$_GET['token'];
        
            $p=$_POST['pass1'];
            $cp=$_POST['cpass1'];

            

            if($p===$cp)
            {
                
                $update_query=" update signup set password ='$p' where token='$token' ";
                $iquery=mysqli_query($con,$update_query);

                if($iquery)
                {
                    ?>

                    <script>
                        alert("Password Updated");
                        window.location.replace("../mainpages/index.php");
                    </script>
                    <?php
                }
                else{
                    ?>

                    <script>
                        alert("Something went wrong");
                        
                    </script>
                    <?php
                }
            }
            else{

                ?>
                <script>
                    alert("Password confirmation failed!");
                </script>

                <?php
            }
        }
        else{
            ?>
            <script>
                    alert("This is the problem");
                </script>

            <?php
        }


}

?>



    <div class="container">
        
        <form class="form " id="createAccount" action="" method="POST">
            <h2 class="form__title">Reset your password</h2>
            

            <div class="form__input-group">
                <input type="password" name="pass1" required class="form__input" autofocus placeholder=" New Password">
                
            </div>

            <div class="form__input-group">
                <input type="password" name="cpass1" required class="form__input" autofocus placeholder="Confirm password">
                
            </div>
           
            <button id="resetpass" class="form_button" type="submit" name="submit" >Reset</button>


        </form>
    



    </div>

    

    
</body>
</html>


