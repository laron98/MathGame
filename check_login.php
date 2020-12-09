<?php
//print_r($_POST);
require_once 'files.php'; //reading in the file 
require_once 'config.php'; //the config of
echo "<pre>";

extract($_POST);

//1: can login; if 1 checks for username pw and usertype and redirects
//2: if 2 checks for username pw and usertype and redirect to teacher page
//3: if 3 user is not in the system since neither username, pw, or type is here
$res = check_login($username, $pw);

if($res===1){
	/*Redirect browser*/
	session_start(); 
    $_SESSION['$username'] = $username;
	header("Location: studentHome.php/");

}elseif($res===2){
	session_start(); 
    $_SESSION['$username'] = $username;
	header("Location: TeacherPage.php/");
}else{
	echo "Invaild username or password";

	/*Redirect to login.php after 5 seconds*/
    header("refresh:5; url=login.php");
} 

/**
*Returns 1: can login
*		 2: user does not exist
*        3: invaild password
*/
// function getPasswordByName
function check_login($username, $pw){
	$all_user = get_user_info($username);  //USERFILE is in Config/path to json file
	//$tempo = getData(USERFILE);
	//var_dump($all_user);
	//$tempo[$username]['carGameScore'] = 20;
	//writeData(USERFILE, $tempo);
	//var_dump($tempo);
	//print($all_user[0]['carGameScore']);
	if($all_user){
		if($all_user[0]['password'] === $pw && $all_user[0]['user_type'] === 2){
			return 1;
		exit;
		}elseif($all_user[0]['password'] === $pw && $all_user[0]['user_type'] === 1){
			return 2;
		exit;
		}	
	}
	return 3;
	
}



?>








