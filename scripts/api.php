<?php
    /*
        API Scripts
        Used for callbacks from JQuery generally.
    */
    
    include("../libs/common.php"); // Include the common library files.

    // Parameters
    $script     = addslashes($_GET['s']); // Add slashes to avoid injections

    // We are going to allow a POST or a GET for parameters
    if(@$_POST['p1'])
    {
        $parameter1 = addslashes(@$_POST['p1']); // Add slashes to avoid injections
    } else if(@$_GET['p1']) {
        $parameter1 = addslashes(@$_GET['p1']); // Add slashes to avoid injections
    }

    if($script == "addcookie")
    {
        setcookie("CamSampler", $parameter1); // Create das cookie
        setcookie("CamSampler", $parameter1, time()+300); // 5 Minutes ;)
        setcookie("CamSampler", $parameter1, time()+300, "/", "samples.cameronmcguffie.com", 1); // Restrict to my subdomain

        echo "OK";
    } 
    else if($script == "viewcookie") 
    {
        if(isset($_COOKIE["CamSampler"])) {
            echo $_COOKIE["CamSampler"];
        } else {
            echo "No Cookie Set";
        }
    } 
    else if($script == "deletecookie") 
    {
        if(isset($_COOKIE["CamSampler"])) {
            setcookie("CamSampler", $parameter1);
            setcookie("CamSampler", $parameter1, time()-3000); // Ages in the past
            setcookie("CamSampler", $parameter1, time()-3000, "/", "samples.cameronmcguffie.com", 1); // Ages in the past
    
            echo "OK";
        } else {
            echo "ERR";
        }
    } 
    else if($script == "salthash") 
    {
        echo password_hash($p1, PASSWORD_DEFAULT);
    }
    else if($script == "gethtml") 
    {
        $DOMDoc = new DomDocument;
        $DOMDoc->loadHTML(file_get_contents("http://php.net/downloads.php"));
        
        echo $DOMDoc->getElementById('gpg-7.2')->nodeValue;
    }
    else if($script == "adduser")
    {
        $parts          = explode(";", $parameter1);
        $sql 		    = "INSERT INTO users VALUES('', '" . $parts[0] . "', '" . $parts[1] . "', '" . $parts[2] . "');";
        $result 	    = $GLOBALS['SQL_Conn']->query($sql) or die($GLOBALS['SQL_Conn']->error);

        echo "OK";
    }
    else if($script == "listusers")
    {
        header('Access-Control-Allow-Origin: *');
        header('Content-Type: application/json;charset=utf-8');

        $userdetails    = "{\"users\" : [";
        $sql 		    = "SELECT * FROM users;";
        $result 	    = $GLOBALS['SQL_Conn']->query($sql);
    
        if ($result->num_rows > 0)  
        {
            while($row = $result->fetch_assoc()) 
            {
                if($userdetails != "{\"users\" : [") { $userdetails .= ","; }
                $userdetails .= "{\"id\" : \"" . $row["id"] . "\", " . 
                                "\"firstname\" : \"" . $row["firstname"] . "\", " . 
                                "\"lastname\" : \"" . $row["lastname"] . "\", " . 
                                "\"email\" : \"" . $row["email"] . "\"}";
            }
        }

        if($userdetails != "{") { echo $userdetails . "]}"; }
    }
    else if($script == "deleteuser")
    {
        $sql 		    = "DELETE FROM users WHERE id='" . $parameter1 . "';";
        $result 	    = $GLOBALS['SQL_Conn']->query($sql) or die($GLOBALS['SQL_Conn']->error);

        echo "OK";
    }
?>