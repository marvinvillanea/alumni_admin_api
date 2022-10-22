<?php 
    session_start();
    include("connection/DBConnection.php");
    

    try {
        $db = new DatabaseClass();
        
        if (isset($_SESSION["access_token"])){
            
            //gooo

        } else {
            session_unset();
            session_destroy();
            session_write_close();
            setcookie(session_name(),'',0,'/');
            session_regenerate_id(true);
            header("Location: ".HOST."/login.php");
        }
    
        
    } catch(\Exception $e) {
        session_unset();
        session_destroy();
        session_write_close();
        setcookie(session_name(),'',0,'/');
        session_regenerate_id(true);
        header("Location: ".HOST."/login.php");
    }



?>