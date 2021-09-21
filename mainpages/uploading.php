<?php
session_start();
//echo $_SESSION['email'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>greenScreen</title>
    <script 
    src="http://www.dukelearntoprogram.com/course1/common/js/image/SimpleImage.js">
    </script>

    <link rel="stylesheet" href="../css/uploadStyles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Pacifico&display=swap" rel="stylesheet">

</head>


<body>

    <div class="nav_section">
        

        <div id="text"> Choose your image and get started! </div>

        

    </div>
    <div class="upload">

        <input class="upload_btn" type="file" multiple ="false" accept="image/*" onchange="upload()" id="file">

    </div>
    


    <canvas class="canvas"id=can></canvas>

    





<button id="resize" class="setter" onclick="resize()" >See in original size</button>

<div style="align-items: center;"class="change_buttons">

    <button onclick="section()">Make rainbow</button>

    <button onclick="greyscale()">Make Greyscale</button>

    <button onclick="addBorder()">Add border</button>

   

    <button onclick="makeRed()">make the image red</button>
    <!--<button onclick="blur()">Blur the image</button>-->

    <button onclick="reset()">reset to original</button>


    <a href='#' id="download" download="editted.png">
        <button onclick="down()" >
            Download
        </button>
    </a>
    <!--<button onclick="save()">Save</button>-->

</div>

<!--<div>

    <input type='color' id="color" onchange="chooseColor()">

</div>

<input type='range' min='0' max='100' value='0' onchange='slidervalue()' id='sldr'>-->




<script src="../js/uploadimg.js"></script>
<script src="../js/editimg.js"></script>

    
    
</body>
</html>