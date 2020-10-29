<?php
     //logging user in: prompt for and retrieve username, password, email?

     //select game: 
     echo "Which math skills would you like to practice?<br>";
     //display two buttons with graphics of the games
     echo "Addition and subtraction OR Identifying ones, tens, and hundreds places<br>";
     const DIFFICULTY = "moderate";
     $randMax = 0;

     // get desired difficulty level, set by teacher? or chosen by student?
     if (DIFFICULTY === "easy") {
          $randMax = 5;
     } elseif (DIFFICULTY === "moderate") {
          $randMax = 20;
     } elseif (DIFFICULTY === "extreme") {
          $randMax = 49;
     } 

     createEquation($randMax);

     function createEquation($randMax) {
          $num1 = rand(1,$randMax);
          $num2 = rand(1,$randMax);
     
          if ($num2>$num1){
               $swap = $num1;
               $num1 = $num2;
               $num2 = $swap;
          }
          $addAnswer = $num1+$num2;
          $subAnswer = $num1-$num2;
          echo $num1."+".$num2."=".$addAnswer."<br>";
          echo $num1."-".$num2."=".$subAnswer;
     }

     

?>
