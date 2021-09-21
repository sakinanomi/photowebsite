
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



    <div class="container">
        <form class="form " id="login" action="../php/loginuser.php" method="POST">

            <h2 class="form__title">Login</h2>

            <div class="form__input-group"> <!--since we are keeping the email as unique-->
                <input type="email" name="email" required class="form__input" autofocus placeholder="Email">
                
            </div>

            <div class="form__input-group">
                <input type="password" name="password" required class="form__input" autofocus placeholder="Password">
                
            </div>
            
            <button class="form_button" type="submit">Login</button>
            <p class="form__text">
                <a class="form__link" href="./" id="linkCreateAccount">Don't have an account? Create account</a><br><br>
                <a class="form__link" href="../php/recover_email.php" id="forgotpass">Forgot Password?</a>
            </p>
            


        </form>
        
        <form class="form form__hidden" id="createAccount" action="../php/createuser.php" method="POST">
            <h2 class="form__title">Create Account</h2>
            <div class="form__input-group">
                <input type="text" name="username" required class="form__input" autofocus placeholder="Username">
                
            </div>

            <div class="form__input-group">
                <input type="email" name="email" required class="form__input" autofocus placeholder="Email Address">
                
            </div>

            <div class="form__input-group">
                <input type="password" name="pass" required class="form__input" autofocus placeholder="Password">
                
            </div>

            <div class="form__input-group">
                <input type="password" name="cpass" required class="form__input" autofocus placeholder="Confirm password">
                
            </div>
            <p class="form__text">
                <a class="form__link" href="./" id="linkLogin">Aready have an account? Login</a>
            </p>

            <button id="accCreate" class="form_button" type="submit" name="submit" >Create</button>


        </form>
    



    </div>

    <script src="../js/main.js">

    </script>

    
</body>
</html>