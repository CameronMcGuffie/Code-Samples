<?php
    include("libs/common.php"); // Include the common library files.
    $page = addslashes($_GET["p"]); // Add slashes incase someone tries to inject something tricky
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Samples</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <link rel="stylesheet" href="/assets/fonts/font-awesome.min.css">
</head>

<body class="bdBody">
    <div class="row rwBody rwNav">
        <div class="col clHeader">
            <header>
                <h1>Code Samples</h1>
                <div class="dvSmallSpacer"></div>
                <ul class="nav nav-tabs">
                    <?php
                        /*
                            I'll comment on the below here, basically the same logic as down below except
                            we are making the link appear "active" when its page is selected.
                        */
                    ?>
                    <li class="nav-item"><a class="nav-link <?php if(!$page || $page == "introduction") { echo "active"; } ?>" href="<?php echo $GLOBALS["Page_URL"]; /* Main URL */ ?>">Introduction</a></li>
                    <li class="nav-item"><a class="nav-link <?php if($page == "server") { echo "active"; } ?>" href="/p/server">Server Setup</a></li>
                    <li class="nav-item"><a class="nav-link <?php if($page == "jquery") { echo "active"; } ?>" href="/p/jquery">JQuery</a></li>
                    <li class="nav-item"><a class="nav-link <?php if($page == "php") { echo "active"; } ?>" href="/p/php">PHP</a></li>
                </ul>
            </header>
        </div>
    </div>
    <div class="row rwBody rwContent">
        <div class="col clPageContent">
            <?php
                if(!$page || $page == "introduction") // If a page isn't selected or introduction is
                {
                    include("pages/introduction.php");
                } elseif (!file_exists("pages/" . $page . ".php")) { // The page referred to doesn't exist
                    include("pages/404.php");
                } else {
                    include("pages/" . $page . ".php");
                }
            ?>
        </div>
    </div>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/scripts.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>