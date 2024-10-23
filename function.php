<?php
function validate($array){
$errors=[];

    foreach($array as $key =>$value){
        if(!is_array($value)){
            if(empty(trim($value))){
            $errors[$key]=$key."should not be empty";
            }
        }
    }   
        if(empty($array['hobbies'])){
            $errors['hobbies']="hobbies should not be empty";
        }
        if(empty($array['lang'])){
            $errors['lang']="lang should not be empty";
        }






return $errors;
}
?>