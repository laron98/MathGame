<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            background-image: url("safari.png");
            background-size: 1500px 1000px;
            background-repeat: no-repeat; 
        }
    </style>
</head>

<?php
	function difficutlyCG(){
    print_r($_POST);
    $difficulty = 0;
    if(isset($_POST['easy1'])) { 
            return 0; 
        } 
        if(isset($_POST['hard1'])) { 
            return 1; 
        } 
    return $difficulty;
    }
    
    function difficutlySG(){
    $difficulty = 0;
    if(isset($_POST['easy2'])) { 
            return 0; 
        } 
        if(isset($_POST['hard2'])) { 
            return 1; 
        } 
    return $difficulty;
    }
?> 
<?php

$Score = 0;
$ArrEasyPlace = array('Tens','Ones');
$ArrHardPlace = array('Hundredths','Tens','Ones');

$EasySet = rand(10,99);
$HardSet = rand(10,999);

$Difficulty = 0;

$Counter = 0;

if($Difficulty == 0){
	//$Answer = 0;
	$TempNum = rand(0,1);
	$TempPlace = $ArrEasyPlace[$TempNum];
    
	echo $EasySet;
    echo "</p>";
    echo "<h1 style="text-align:center;">What Number is in the $TempPlace Place?"</h1>";
    echo "</p>";
    ?>
    
    <form action = "SafariGame.php" method = "get">
    Answer: <input type = "text" name = "ans"/>
    <input type = "submit">
    </form>
    
    <?php
    if (isset($_GET["ans"])){
    $input = $_GET['ans'];
    
    if($TempNum == 0){
    	$Answer = substr($EasySet, 0, 0);
    }
    else{
    	$Answer = substr($EasySet, 1, 1);
    }
    
    if($input == $Answer){
    	$Score++;
        $Counter++;
        echo "</p>";
    	echo "Correct!";
        echo "</p>";
        echo "Your score is " . $Score . "/" . $Counter;
        echo "</p>";
    }
    else{
    	$Counter++;
    	echo "</p>";
    	echo "Incorrect :(";
        echo "</p>";
        echo "Your score is " . $Score . "/" . $Counter;
        echo "</p>";
    }
    
}
else{
	$TempNum = rand(0,2);
	$TempPlace = $ArrHardPlace[$TempNum];
	echo $HardSet;
    echo "</p>";
    echo ("What Number is in the " . $TempPlace . " Place?");
    echo $_POST['value'];
    
    if($TempNum == 0){
    	$Answer = substr($HardSet, 0, 0);
    }
    elseif($TempNum == 1){
    	$Answer = substr($HardSet, 1, 1);
    }
    else{
    	$Answer = substr($HardSet, 2, 2);
    }
    
    if($_POST == $Answer){
    	$Score++;
        $Counter++;
        echo "</p>";
    	echo "Correct!";
        echo "</p>";
        echo "Your score is " . $Score . "/" . $Counter;
        echo "</p>";
    }
    else{
    	$Counter++;
    	echo "</p>";
    	echo "Incorrect :(";
        echo "</p>";
        echo "Your score is " . $Score . "/" . $Counter;
        echo "</p>";
    }
}
}
?>

</body>
</html>
