<?php
    $to = "contato@encontrerapido.com.br";
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $affair = $_POST["affair"];
    $message = $_POST["message"];
    
    $m = "$message <br>";
    $m .= "<br>";
    $m .= "Telefone: $phone <br>";
    
    // To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

    // Additional headers
    $headers .= "To: Encontre Rápido <$to>" . "\r\n";
    $headers .= "From: $fullname <$email>" . "\r\n";
    
    $return = mail($to, $affair, $m, $headers);

    if($return) {
        $m=1;
    } else {
        $m=0;
    }

    header("Location:../contato.php?m=$m");
?>