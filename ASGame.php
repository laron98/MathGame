<!DOCTYPE html>
<html>
<body>

<?php
$ArrEasyPlace = array('Tens','Ones');
$ArrHardPlace = array('Hundredths','Tens','Ones');

$EasySet = rand(10,99);
$HardSet = rand(10,999);

$Difficulty = 0;

if($Difficulty == 0){
	$TempNum = rand(0,1);
	$TempPlace = $ArrEasyPlace[$TempNum];
	echo $EasySet;
    echo "</p>";
    echo ("What Number is in the " . $TempPlace . " Place?");
}
else{
	$TempNum = rand(0,2);
	$TempPlace = $ArrHardPlace[$TempNum];
	echo $HardSet;
    echo "</p>";
    echo ("What Number is in the " . $TempPlace . " Place?");
}

?>

</body>
</html>

