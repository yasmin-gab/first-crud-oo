<?php
include 'contact.class.php';
$contact = new Contact();

if(!empty($_POST['id'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $id = $_POST['id'];

    if(!empty($email)) {
        $contact->edit($name, $email, $id);
    }

    header("Location: index.php");
}