
<?php

    include_once "connection.php";

    if(isset($_GET['page'])) {
        $page = $_GET['page'];
        $pageFile = "pages/".$page;

        if(file_exists($pageFile)) {
            include_once $pageFile;
        } else {
            echo "404";
        }
    } else {
        include_once "pages/home.php";
    }

?>