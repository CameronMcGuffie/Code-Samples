<?php
    /*
        API Scripts
        Used for callbacks from JQuery generally.
    */

    // Parameters
    $script     = addslashes($_GET['s']); // Add slashes to avoid injections

    // We are going to allow a POST or a GET for parameters
    if($_POST['p1'])
    {
        $parameter1 = addslashes($_POST['p1']); // Add slashes to avoid injections
    } else if($_GET['p1']) {
        $parameter1 = addslashes($_GET['p1']); // Add slashes to avoid injections
    }

    if($script == "addcookie")
    {
        setcookie("CamSampler", $parameter1); // Create das cookie
        setcookie("CamSampler", $parameter1, time()+300); // 5 Minutes ;)
        setcookie("CamSampler", $parameter1, time()+300, "/", "samples.cameronmcguffie.com", 1); // Restrict to my subdomain

        echo "OK";
    }
?>