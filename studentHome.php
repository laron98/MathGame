<!DOCTYPE html>
<html lang="en">
<title> Student Home </title>
<style>
body {
    background-color: paleturquoise;
}
#button1 {
    background-color: red;
    border: solid 2px cyan;
    color: cyan;
    font-size: 64px;
    padding: 16px;
}
#button1:active {
  background-color: magenta;
  transform: translateY(4px);
}
#button2 {
    background-color: saddlebrown;
    border: solid 2px greenyellow;
    color: greenyellow;
    font-size: 64px;
    padding: 16px;
}
#button2:active {
  background-color: darkgreen;
  transform: translateY(4px);
}
#container{
        margin-left: 10px;
        position: relative;
        top: 50px;
        left: 300px;
        width: 800px;
        padding: 30px;
        background-color: darkblue;
        color: lightcyan;
        text-align: center;
        border: solid 10px mediumpurple;
    }
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>


<div id="container"> 
     <h1 id="greeting">What game would you like to play?</h1>
<div>
<form action="../ASGame.php">
    <input type="submit"/>
    <button type = "submit" id = "button1">Car Race!</button>
    
    <button type = "submit" id = "button2">Animal Safari!</button>
</form>



</body> 
</html>