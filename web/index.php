<?php
    require ("config/_config.php");
    
?>

    <!DOCTYPE html>

    <!--suppress HtmlDeprecatedAttribute -->
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?= CSS_PATH."fontawesome/fontawesome.css" ?>">
        <link rel="stylesheet" href="<?= CSS_PATH. "fontawesome/solid.css" ?>">
        <link rel="stylesheet" href="<?= CSS_PATH ?>main.css">
        <link rel="stylesheet" href="<?= CSS_PATH. $page["stylesheet"]?>">
        <link rel="icon" type="image" href="<?= IMG_PATH ?>2.png">
        <title><?= $page["title"] ?></title>
    </head>

            <body>
                
                    <?php 
                        if($error){
                            require (PAGE_PATH. DS.$page["file"]);
                        }elseif($page == $pages["login"]){
                            require (PAGE_PATH. DS.$page["file"]);
                        }
                        else{
                            require ( ELEMENTS."header.php");
                            require ( ELEMENTS."sidebar.php");
                            require ( PAGE_PATH .$page["file"]);
                            require ( ELEMENTS."footer.php");
                        }
                            
                        
                                
                            
                    ?>
            </body>
            
    </html>


<?php 
