<?php

include 'database.php';

// We verify that data are correct
if ($_POST['name'] ?? null && $_POST['email'] ?? null && $_POST['password'] ?? null && $_POST['contact'] ?? null) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contact = $_POST['contact'];

    $c = $db->prepare('INSERT INTO User (Name, Email, Password, Contact) VALUES (?, ?, ?, ?)');
    $c->execute(array($name, $email, $password, $contact));

    header('Location: sign-in.html', true, 301);
    exit();
}

header('Location: register.html', true, 301);
