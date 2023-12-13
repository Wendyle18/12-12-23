<?php 
require (DATA."pages.php");

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