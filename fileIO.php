<?php
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
    //file: USERFILE in configure.php
    //keys in the data: name, pw, email, age, is_active based on my design
    //$flag: INACTIVEUSER return an inactive user with the same name as the first parmeter
    //      default/ACTIVEUSER return an active user with the same name as the first parameter
    function getUserByName($name, $flag = ACTIVEUSER){
        $user_info = getData(USERFILE);//calls to use the file and stores it in array
        $res = array();
        switch($flag){
            case ACTIVEUSER:
                $res = array_filter($user_info, function($v) use ($name){
                    return $v['name'] === $name && $v['is_active'] === ACTIVEUSER;
                });
            break;
            case INACTIVEUSER: 
                $res = array_filter($user_info, function($v) use ($name){
                    return $v['name'] === $name && $v['is_active'] === INACTIVEUSER;

                });
            break; 
        }
        return array_values($res);
    }
    function getUserByPassword($password, $flag = ACTIVEUSER){
        $user_info = getData(USERFILE);//calls to use the file and stores it in array
        $res = array();
        switch($flag){
            case ACTIVEUSER:
                $res = array_filter($user_info, function($v) use ($password){
                    return $v['pw'] === $password && $v['is_active'] === ACTIVEUSER;
                });
            break;
            case INACTIVEUSER: 
                $res = array_filter($user_info, function($v) use ($password){
                    return $v['pw'] === $password && $v['is_active'] === INACTIVEUSER;

                });
            break; 
        }
        return array_values($res);
    }
?>
