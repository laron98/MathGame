<?php
   
     echo "Which math skills would you like to practice?<br>";
     //display two buttons with graphics of the games
     echo "Addition and subtraction OR Identifying ones, tens, and hundreds places<br>";
     
     //safari set
     function numbers($difficulty){
          
          $randomNum = rand(1, $difficulty);
          
     }

     function randomNumber(){
          
     }


     function get_difficulty(){
          
     }


     $difficulty = "medium";

     function assignSet($difficulty) {
          
          $easySet = range(1, 99);
          $hardSet = range(1, 999);

          if ($difficulty === "easy") {
               return $easySet;
          }
          } elseif ($difficulty === "hard") {
               return $hardSet;
     }
     $studentSet = assignSet($difficulty);
     print_r($studentSet);
     

?>
