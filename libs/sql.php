<?php
    /*
        SQL Related Libs
        Globals are defined in settings.php
    */

    // Create a connection the the SQL database
    $GLOBALS['SQL_Conn'] = new mysqli($GLOBALS['SQL_Address'], $GLOBALS['SQL_User'], $GLOBALS['SQL_Pass'], $GLOBALS['SQL_DB']) or die("ERROR");
?>