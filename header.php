<?php

$errName = $errAge = $errEmail = $errGender = $errComment = $errSubmit = "";

$name = $age = $email = $gender =$comment =$submit = "";      
      if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["name"])){
          $errName = "Name is Required!";
        }else{
        $name = $_POST["name"];
             }

        if(empty($_POST["age"])){
          $errAge = "Age is Required!";
        }else{
        $age = $_POST["age"];
              }

        if(empty($_POST["email"])){
          $errEmail = "Email is Required!";
          }elseif(!filter_var($_POST["email "], FILTER_VALIDATE_EMAIL)){
            $errEmail = "Invalidate Email id!";
          }else{
          $email = $_POST["email"];
              }

        if(empty($_POST["gender"])){
          $errGender = "Gender is Required!";
        }else{
        $gender = $_POST["gender"];
              }
        
        $comment = $_POST["comment"];
        $submit = $_POST["submit"];

        // echo "Name is : ".$name. "<br/>";
        // echo "Age is : ".$age. "<br/>";
        // echo "Email is : ".$email. "<br/>";
        // echo "Gender is : ".$gender. "<br/>";
        // echo "Comment is : ".$comment. "<br/>";        
      }     
 

?>