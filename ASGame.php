<!DOCTYPE html>
<html>
<body>

<?php
$Score = 0;

$mynumber = 123;

echo substr($mynumber, 1, 1);
 echo "</p>";
 
 
$ArrEasyPlace = array('Tens','Ones');
$ArrHardPlace = array('Hundredths','Tens','Ones');

$EasySet = rand(10,99);
$HardSet = rand(10,999);

$Difficulty = 0;

if($Difficulty == 0){
	$Answer = 0;
	$TempNum = rand(0,1);
	$TempPlace = $ArrEasyPlace[$TempNum];
    
	echo $EasySet;
    echo "</p>";
    echo ("What Number is in the " . $TempPlace . " Place?");
    echo $_POST['value'];
    
    if($TempNum == 0){
    	$Answer = substr($EasySet, 0, 0);
    }
    else{
    	$Answer = substr($EasySet, 1, 1);
    }
    
    if($_POST == $Answer){
    	$Score++;
    	echo "Correct!";
        echo "</p>";
        echo "Your score is " . $Score . "/" . $Counter;
    }
    else{
    	echo "Incorrect :(";
        echo "</p>";
        echo "Your score is " . $Score . "/" . $Counter;
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
    	echo "Correct!";
        echo "</p>";
        echo "Your score is " . $Score . "/" . $Counter;
    }
    else{
    	echo "Incorrect :(";
        echo "</p>";
        echo "Your score is " . $Score . "/" . $Counter;
    }
}

?>

<form method="post" action="">
<input type="text" name="value">
<input type="submit">
</form>

</body>
</html>
