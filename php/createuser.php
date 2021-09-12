<html>

<head>
<link rel="stylesheet" href="../css/main.css">

</head>
<body>

<?php


        $username=$_POST["username"];
        $pass=$_POST["pass"];
        $cpass=$_POST["cpass"];
        $email=$_POST["email"];






       include '../dbcon.php';

    if($con)
    {
        $emailquery="SELECT * FROM signup WHERE email='$email'";
        $query=mysqli_query($con,$emailquery);

        $emailcount=mysqli_num_rows($query);

        if($emailcount>0)
        {
            ?>

            <script>

                alert("Email already exists");
                window.location.replace("../html/index.html");
                </script>


            <?php
        }


        else{


            if(($pass === $cpass))
            {

                $token=bin2hex(random_bytes(15));

                $insertSql="INSERT INTO signup (username, email, password, token) VALUES ('$username','$email','$pass' ,'$token')";

                if (mysqli_query($con, $insertSql)) {
                    ?>
                    <script>

                        alert("Signup successfull! login to continue");

                        <?php
                        mysqli_close($con);

                        ?>
                        
                        window.history.back();
                        window.location.replace("../html/index.html");
                        
                        
                        </script>
                    <?php
                    

                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($con);
                }
                
                


             }
             else
             {
                ?>

                <script>
    
                    alert("Password confirmation failed!");
                    window.history.back();
                    window.location.replace("../html/index.html");
    
                </script>
                <?php
             }
        }

        
    }
    else{
        die("Connection failed: " . mysqli_connect_error());
    }





?>



   
</body>
</html>