<?php

class LoginManager  {
    //This function checks if the user is logged in, 
    // if they are not they are redirected to the login page
    static function verifyLogin()   {
        // check for a session
        if(session_id() == '' && !isset($_SESSION)){session_start();}// start the session
        if(isset($_SESSION['loggedin'])){return true;}// is anyone login?
        else{session_destroy();return false; // destroy the session
        }        
    }     
}

?>