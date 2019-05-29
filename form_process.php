<?php
//define variable set to empty values
$name_error = $email_error = $phone_error  = "";
$name = $email = $phone = $message = $success = "";
//form is submitted with POST method
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["name"])) {
        $name_error = "Mutegerezwa kwandika amazina yanyu";
    } else{
        $name = test_input($_POST["name"]);
        //Check if name only contains letters and whitespace
        if(!preg_match("/^[a-zA-Z]*$/",$name)) {
            $name_error ="Aha Ukoreshe indome n'ibiharuro gusa";
        }
    }
    if(empty($_POST["email"])){
        $email_error = "Mutegerezwa kwandika email yanyu";
    } else{
        $email = test_input($_POST["email"]);
        //check if e-mail address is well-formed
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $email_error = "Subiremwo, Ntimwanditse email neza";
        }
    }

    if(empty($_POST["phone"])){
        $phone_error = "Mutegerezwa kwandika telephone yanyu";
    } else{
        $phone = test_input($_POST["phone"]);
        //Check if email address is well-formed
        if(!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i",$phone)){
         $phone_error = "Subiremwo, Ntimwanditse Telephone  neza";
        }
    }

    if(empty($_POST["message"])){
        $message = "";
    } else{
        $message = test_input($_POST["message"]);
    }
    

    if($name_error == '' and $email_error= '' and $phone_error = ''){
        $message_body ='';
        unset($_POST['submit']);
        foreach($_POST as $key => $value){
            $message_body .= "$key : $value\n";
        }
         $to = 'justeelvain337@gmail.com';
         $subject = 'contact Form Submit';
         if(mail($to, $subject, $message)){
             $success =" Ubutumwa bwanyu,bwarungitswe; Murakoze";
             $name = $email =$phone = $message = '';
         }
    } 

}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

}