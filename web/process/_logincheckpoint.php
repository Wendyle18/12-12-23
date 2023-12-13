<?php 
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
                    setcookie ("isCurrentlyLogin", true, 0, "/");
                    
                    

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





?>