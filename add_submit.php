<?php
include 'contact.class.php';
$contact = new Contact();


if(!empty($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $contact->add($email, $name);

    header("Location: index.php");
}