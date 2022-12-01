<?php
    $folder_path = dirname($_SERVER['SCRIPT_NAME']);
    $url_path = $_SERVER['REQUEST_URI'];
    $url = substr($url_path, strlen($folder_path));
    $title = !isset(explode('/', $url )[2]) ? "Home" : explode('/', $url )[2];

    define('URL', $url);
    define('TITLE_SECTION',$title );
    define('TITLE_PAGE', "Prueba");
    define('ROOT',$_SERVER['DOCUMENT_ROOT'] );
    define('FOLDER_PATH',$folder_path);