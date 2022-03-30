<?php

// Traitement image
if(isset($_FILES) && !empty($_FILES['image'])){
    echo 'une image';
};


    if(isset($_POST) && !empty($_POST['mail']) && !empty($_POST['message']) ){

        $message= $_POST['message'];
        $to= $_POST['tortuga4281@yahoo.fr'];
        $subject= 'From:'.$_POST['mail']."\n";
        $headers = 'MIME-Version: 1.0'."\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1'."\n";
        $headers .= 'From: Les cîmes du Forez <super-site@example.com>'."\n";
            
        if(mail($to, $subject, nl2br($message), $headers)){
            echo 'Le mail est envoyé';
        }else{
            echo 'Probème d\'envoi';
        };
    }
?>