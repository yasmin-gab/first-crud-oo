<?php
include 'contact.class.php';
$contact = new Contact();

if(!empty($_GET['id'])) {
    $id = $_GET['id'];

    $contact->deleteById($id);
}

header("Location: index.php");