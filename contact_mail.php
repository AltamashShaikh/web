<?php

session_start();
$contact_message = '';
if (isset($_POST['Name']) && !empty($_POST['Name']) && 
        isset($_POST['Email']) && !empty($_POST['Email']) && 
        isset($_POST['Telephone']) && !empty($_POST['Telephone']) &&
        isset($_POST['message']) && !empty($_POST['message'])) {

    require './mail_connection.php';
    if (send_mail($_POST)) {
        $contact_message = 'Your Response Has Been Recorded Successfully!';
    } else {
        $contact_message = 'Sorry We are Currently Unable to Record Your Response, Please Try Again Later ';
    }
    $_SESSION['contact_message'] = $contact_message;
    if (isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER'])) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
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
    $mail_obj->Subject = "Contact Form Query";
    $mail_obj->Body = '<p>Hi, the following query has been recorder</p><p>Name: '.$_POST['Name'].'</p><p>Email: '.$_POST['Email'].'</p><p>Telephone: '.$_POST['Telephone'].'</p><p>Message: '.$_POST['message'].'</p>';
    $mail_obj->AltBody = '<p>Hi, the following query has been recorder</p><p>Name: '.$_POST['Name'].'</p><p>Email: '.$_POST['Email'].'</p><p>Telephone: '.$_POST['Telephone'].'</p><p>Message: '.$_POST['message'].'</p>';
    if (!$mail_obj->send()) {
        return FALSE;
    } else {
        return TRUE;
    }
}
