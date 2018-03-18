<?php

session_start();
$newsletter_message='';
if(isset($_POST['Email']) && !empty($_POST['Email'])){
    
require './mail_connection.php';
        if(send_mail(array('email' => $_POST['Email']))){
			$newsletter_message='Subscribed to email successfully';
		}else{
			$newsletter_message='Unable to subscribe';
		}
		$_SESSION['newsletter_message']=$newsletter_message;
                if(isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER'])){
                    header('Location: '.$_SERVER['HTTP_REFERER']);
                    exit();
                }       
}

header('Location: index.php');

function send_mail($row) {
    $mail_connection = new MailConnection();
    $mail_obj = $mail_connection->get_mail_connection_obj();
    $mail_obj->From = 'adu2012@gmail.com';
    $mail_obj->FromName = 'Advaita';
    $mail_obj->addAddress('adu2012@gmail.com');
    $mail_obj->isHTML(true);
    $mail_obj->Subject = "Newsletter Subscribed";
    $mail_obj->Body = '<p>Hi</p><p>Following User '.  $row['email']." has subscribed to your newsletter!!!</p>";
    $mail_obj->AltBody = '<p>Hi</p><p>Following User '.  $row['email']." has subscribed to your newsletter!!!</p>";
    if (!$mail_obj->send()) {
        return FALSE;
    } else {
        return TRUE;
    }
}