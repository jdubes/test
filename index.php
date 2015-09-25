<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>nnknkjnj</title>
    </head>
    <body>
        <?php
        function displayGreeting($hourofday){
        $hourofday = (int)$hourofday;
        

switch ($hourofday) {
     case $hourofday >=6 && $hourofday <=11:
         $greeting = "Goodmorning";
         break;
    case $hourofday >=12 && $hourofday <=17:
         $greeting = "Goodafternoon";
         break;
    case $hourofday >=18 && $hourofday <=20:
         $greeting = "Goodevening";
         break;
       case $hourofday >=21 || $hourofday <5:
         $greeting = "Goodnight";
         break;


     
        }
        
      return $greeting;
        }
        print "The hour is 6 " . displayGreeting(6) . "<br>";
        print "The hour is 12 " . displayGreeting(12). "<br>";
        print "The hour is 3 " . displayGreeting(3). "<br>";
        print "The hour is 19 " . displayGreeting(19). "<br>";
        
     
        
        ?>
        
    </body>
</html>

