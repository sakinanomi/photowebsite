<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php



   include '../dbcon.php';
   $email=$_POST["email"];
   $pass=$_POST["password"];

    if($con)
    {
        $user_search="SELECT * FROM signup WHERE email='$email'";//since email is unique
        $query=mysqli_query($con,$user_search);

        $usercount=mysqli_num_rows($query);

        if($usercount)//means email found
        {
            $userinfo=mysqli_fetch_assoc($query);
            $userpass=$userinfo['password'];
            $_SESSION['username']=$userinfo['username'];
            $_SESSION['email']=$userinfo['email'];

            if($userpass===$pass)
            {
                
                ?>
                <script>
                window.location.replace("../mainpages/welcome.php");//redirect to another page 
                </script>

                <?php
                mysqli_close($con);
            }

            else{
                ?>

                <script>
                    alert("Password Incorrect");
                    window.history.back();
                    window.location.replace("../index.php");

                </script>



            <?php
            mysqli_close($con);
            }

            
        }
        else{

            ?>

            <script>
                alert("Invalid email address");
                window.history.back();
                window.location.replace("../index.php");
            </script>

            <?php
            mysqli_close($con);
        }

       
    }
    else{
        echo"error";
    }





?>
    
</body>
</html>