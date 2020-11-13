<?php
print_r($_POST);
require_once 'files.php'; //reading in the file 
require_once 'config.php'; //the config of
echo "<pre>";

extract($_POST);

//1: can login 2: user does not exist  3: invaild password
$res = check_login($username, $pw);

if($res===1){
	/*Redirect browser*/
	session_start(); 
    $_SESSION['$username'] = $username;
	header("Location: menu.php/");

}else{
	echo "Invaild username or password";

	/*Redirect to login.php after 5 seconds*/
    //header("refresh:5; url=login.php");
} 

/**
*Returns 1: can login
*		 2: user does not exist
*        3: invaild password
*/
// function getPasswordByName
function check_login($username, $pw){
	$all_user = get_user_info($username);  //USERFILE is in Config/path to json file
	if($all_user){
		if($all_user[0]['password'] === $pw){
			return 1;
			
		}else{
			return 3;
		}
	
		
	}
	return 2;
	print_r($all_user);


	/*

	foreach($all_user as $key=>$item){
		if ($key==$username){
			$password=$item['password'];
			if(password_verify($pw, $password)){
				return 1;
			
			
			}
			return 3;
		}
		
	}

	return 2;
*/
}

?>








