<!DOCTYPE HTML>
<html> <meta charet="utf-8"> 
     <style>

body {
   background-image: url("robot.jpg");
    background-repeat : no-repeat;
        background-position: right;
        background-attachment: fixed;
}
         
</style>
<body>  
<?php

if (isset($_buttons['button1'])){
 echo "<h1><font size=10> R </font></h1> ";
}

if (isset($_buttons['button2'])){
 echo "<h1><font size=10> F </font></h1> ";
}
    
if (isset($_buttons['button3'])){
 echo "<h1><font size=10> L </font></h1> ";
}

if (isset($_buttons['button4'])){
 echo "<h1><font size=10 color= darkred> STOP </font></h1> ";
}

if (isset($_buttons['button5'])){
 echo "<h1><font size=10> B </font></h1>";
}

?>

    </body>
     </html>
