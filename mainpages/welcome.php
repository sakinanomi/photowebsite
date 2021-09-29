<?php
    session_start();

    if(!isset($_SESSION['username']))
{
    ?>
    <script>

        window.location.replace("index.php");
        </script>


<?php
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.css">
    <link href="../css/welcomestyles.css" rel="stylesheet"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Pacifico&display=swap" rel="stylesheet">


<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">






   <title>Document</title>
</head>
<body>

   

    
    <nav class="nav_section" >

        <div class="nav_container">

            <div id="greet">
            <p >Hello, <?php echo $_SESSION['username']; ?>!</p>
            </div>

            <div id="nav_links">
                
                <a class="nav_link" href="#home"><b>HOME</b></a>
                <a class="nav_link" href="#about"><b>ABOUT</b></a>
                
                <a class="nav_link" href="#view"><b>EXAMPLES</b></a>
               

                <a class="button " href="../php/logout.php">LogOut</a>
            </div>
        </div>
    </nav>

    <div id="mainsection">

        <div class ="main_text" >
            <p id="head" ><b>Free online photo editing site</b></p><br>
            Just Upload your photo and Start editing!
        </div>
        <div id="img1">
            <img src="../images/imgs/technology.png" alt="tech" style="height:450px;width:500px;float: left;">
        </div>

        
    </div>


    <img src="../images/imgs/selfie.png" alt="tech" style="height:400px;width:500px;float: right;margin-top: 200px;">

    <div id="main_text">
        
        <p style="margin-top: 200px;">Editing photos has never been easier!</p><br>
        <a class="button" href="uploading.php" style="margin-top: 500px;">Start Now</a>

        
    </div>

    <div class="relative" style="font-family: 'Roboto', sans-serif;
    font-size: 40px;"><b>
        Find inspiration!</b>
    </div>
    
   <div class="basic1" style="margin-top: 270px;">

        <div class="basic">
            <div class="polaroid">
                <img src="../images/img1.jpg" alt="smile" style="width:100%">
                <div class="container">
                <p><b>MAKE GREYSCALE!!</b></p>
                </div>
            </div>

            <div class="polaroid">
                <img src="../images/img2.jpg" alt="green" style="width:100%">
                <div class="container">
                <p><b>ADD BORDERS!!</b></p>
                </div>
            </div>
        </div>

        <div class="basic" style="margin-top: 40px;">

            <div class="polaroid">
                <img src="../images/img3.jpg" alt="image" style="width:100%">
                <div class="container">
                <p><b>ADD COLORS!!</b></p>
                </div>
            </div>

            <div class="polaroid">
                <img src="../images/img4.jpg" alt="image" style="width:100%">
                <div class="container">
                <p><b>CHANGE GREEN BACKGROUNDS!!</b></p>
                </div>
            </div>

        </div>

    </div>
    
    


    <footer >

        <p style="padding-top: 15px;">Made by Sakina Nomi</p><br>
        <div style="padding-bottom: 15px; ">
            <a href="https://www.linkedin.com/in/sakina-nomi/" target="_blank" class="footer_links"><i class="fab fa-linkedin fa-lg" ></i></a>
            <a href="https://github.com/sakinanomi" target="_blank" class="footer_links"><i class="fab fa-github fa-lg" ></i></a>
            <a href="https://www.instagram.com/sakina_nomi/" target="_blank" class="footer_links"><i class="fab fa-instagram fa-lg" ></i></a>
         </div>
    </footer>

    

    







    
    
    
</body>
</html>