<?php 

declare (strict_types= 1);


function homework(string $first_name, string $last_name, string $email, string $password, string $confirm){
if (!empty($first_name) && !empty($last_name) && !empty($email) && !empty($password) && !empty($confirm)){
    if ( $password === $confirm){
        $result = "Sign in successful Welcome, $first_name $last_name, your email is $email.";

        
    }else{
        $result = "password does not match";
    }
}else{
    $result = "All input fields are required";
}
return $result;
}



if ($_SERVER ["REQUEST_METHOD"] == "POST"){

    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    if (!empty($first_name)) && !empty($last_name) && !empty($email) && !empty($password){
        if( $password == $confirm_password){
            echo "success_full";
        }else {
            echo "password does not match";
        }

        
    }else{
        echo "ALL input fields are required";
    }

} else{
    echo "Request Method is invalid ";

}


?>