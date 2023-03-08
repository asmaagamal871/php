<?php
require_once("config.php");
require_once("function.php");


  if(!empty($_POST)){
    if(empty($_POST["name"]) ||empty($_POST["email"]) || empty($_POST["message"]) ){
        $error = "All fields are required";
    }elseif(strlen($_POST["name"]) > MAX_NAME_LENGTH){
        $error = "Name must be less than less than 100 charachters";
    }elseif(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
        $error = "Email is not valid";
    }elseif(strlen($_POST["message"]) > MAX_MESSAGE_LENGTH){
        $error = "Message must be less than less than 255 charachters";
    }
    else{
        $error = "<strong>". WELCOME_MESSAGE ."</strong> </br></br>
                  <strong>Name: </strong>" .$_POST["name"] . "</br>".
                  "<strong>Email: </strong>" .$_POST["email"] . "</br>".
                  "<strong>Message: </strong>" .$_POST["message"];
        
        die($error);
    }
}
require_once("views/form.php");

?>
