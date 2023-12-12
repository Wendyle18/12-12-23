<?php
require ("_config.php");
require (DATA."pages.php");
require (DATA."users.php");
require (DATA."roles.php");
require (DATA."role_privileges.php");


// $user = array("role_id" => 1 );



$labelindicator = "";

if( $_POST){
    $user = $users[0];
    $username = isset($_POST["username"]) ? $_POST["username"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";
    $usernames= array_column($users, "username");  
    $passwords = array_column($users, "password"); 
    
    
    
        if(in_array($username, $usernames)){
        if(in_array($password, $passwords)){
            
    
            $label = "success";
            $labelindicator = "Successfully Login";

            $user = $users[array_search( $username , $usernames )];
            session_start();
            
                header ("Location: dashboard");
            // echo "username: $username";
            // echo "password: $password";
    

        }else{
           
            $label = "error";
            $labelindicator = "Incorrect Username and Password";
        }
    }else{
           
            $label = "error";
            $labelindicator = "Incorrect Username and Password";
}
}





$error = false;
$page = $pages ["dashboard"];
$urlSegments = explode ("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

if (array_key_exists ("3", $urlSegments)&& !empty ($urlSegments[3]) ){    
    if (array_key_exists ($urlSegments[3], $pages)){
        $page = $pages[$urlSegments [3]];
        // echo "<pre>";
        // print_r ($role_privileges);
        // exit();



    if ($page){ 
        $pages["login"];
     } else{
                $role_ids = array_column($role_privileges, "role_id");
                if (in_array($user["role_id"], $role_ids)){
                        $rpIndex = (array_search($user["role_id"], $role_ids));
                            // echo $page["id"] ."<br>";
                        $pageRP = ($role_privileges [$rpIndex]);  
                         }  
                    
                while($pageRP["page_id"] != $page["id"]){
                        $rpIndex += 1;
                        if ( array_key_last($role_ids) > $rpIndex)
                            break;
                        $slicedRI = array_slice($role_ids,  $rpIndex , null, true);
                        $rpIndex = (array_search($user["role_id"], $slicedRI));
                        $pageRP = ($role_privileges [$rpIndex]);    
                    }
                    
                    if ($pageRP["read"] == 1){
                        // echo  $page['page'];
                        $page['page'];
                        // echo "<pre>";
                        // print_r ($page);
                        // exit();
                        
                    
                    }else{
                        $page = $pages["403"];
                        $error = true;
                    }
                }
            }
    
 
    else{ 
        $page = $pages ["404"];
        $error = true;
    } 

}




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