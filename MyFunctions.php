<?php

    if(isset($_GET['method'])){
        if($_GET['method']=== 'logout'){
            destroy_session();
            head("Location: loginPage.php");
        }
    }

    function destroy_session(){
        //unest()
        //session_destroy()
        my_session_start();
        unset($_SESSION['uname']);
    
    }

    function my_session_start(){
        if(session_status()!==PHP_SESSION_ACTIVE){
            session_start();
        }
    }
?>