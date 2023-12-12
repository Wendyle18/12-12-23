<?php 
    define("DS", "/");
    define("APP_NAME", "web");
    define("BASE_URL", $_SERVER ["REQUEST_SCHEME"].":".DS.DS. $_SERVER ["SERVER_NAME"]. DS .APP_NAME .DS."index.php".DS);
    define("BASE_PATH", DS .APP_NAME. DS);
    define("ASSETS_PATH", BASE_PATH. "assets".DS);
    define("CSS_PATH", ASSETS_PATH. "css".DS);
    define("JS_PATH", BASE_PATH. "js" .DS);
    define("IMG_PATH", BASE_PATH. "img".DS);
    define("PAGE_PATH", "pages" .DS);
    define("DATA", "database" .DS);
    define("ELEMENTS", "elements" .DS);


?>