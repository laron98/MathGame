<?php 
include_once 'fileIo.php';
echo "<pre>";


if(isset($_POST['action_name'])){
        switch($_POST['action_name']){
            case 'login':
                $res = check_login();

                if($res ===1){
                    if(session_status() !==PHP_SESSION_ACTIVE){
                        session_start();
                    }
                    $_SESSION['uname'] = $_POST['username'];
                    header("Location: index.php");
                }else if($res===2){
                    print("User does not exist, please try again!");
                }
                header("refresh: 5; url=MathGameLogin.php");
            break;
        }
}

/**
 * Returns 1: can login 
 *         2: user does not exist 
 *         3: password is invalid 
 *
 */
function check_login(){
    extract($_POST);
    //$user_info = getData(USERFILE); //array of the json file containing everyything

    $username = getUserByName($username); // $username was $info 
    $passwordInfo = getUserByPassword($password);
    if($username[0] === )
    //print_r($info);
    //if(isset($info[0])){
    //    print_R($info[0]);
    return 1;
    
}

function check_DB_Login($username, $password){
 
}
?>