<?php
$key_arr = array("username", "password", "carGameScore","ASgameScore");

include_once 'config.php';
//Reads and Writes data into .json files
//file_put_contents($file, $data) vs file_get_contents($file)
//return value: true on success, false on failure
//$data: an array keeps the data that is written into the file
function writeData($file, $data){
    //convert data to a json format
    $data_json = json_encode($data);

    if(file_put_contents($file, $data_json)){
        return true;
    }else{
        return false;
    }
}

/***
 * read data from a file
 */
function getData($file){
    $res  = file_get_contents($file);  

    //convert it to an array
    $res_arr = json_decode($res, true);
    return $res_arr;
}

function get_user_info($username, $flag = ACTIVEUSER){
    $user_info = getData(USERFILE);
    $res = array();
    print_r($user_info);
    switch($flag){
        case ACTIVEUSER:
            $res = array_filter($user_info, function($v) use ($username){
                return $v['username'] === $username && $v['is_active'] === ACTIVEUSER;
            }); 
            break;
        case INACTIVEUSER:
            $res = array_filter($user_info, function($v) use ($username){
                 return $v['username'] === $username && $v['is_active'] === INACTIVEUSER;
            }); 
            break;
    }

    return array_values($res);

    
    
}
