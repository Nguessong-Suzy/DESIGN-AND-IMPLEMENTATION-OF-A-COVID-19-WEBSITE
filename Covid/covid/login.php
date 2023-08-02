<?php

include 'database.php';

// We verify that data are correct
if ($_POST['email'] ?? null && $_POST['password'] ?? null) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $c = $db->prepare('SELECT User_ID FROM User WHERE Email=? AND Password=?');
    $c->execute(array($email, $password));
    $data = $c->fetch();

    if (!empty($data)) {
        $_SESSION['user_id'] = $data[0];
        header('Location: forms.html', true, 301);
        exit();
    }
}

header('Location: sign-in.html', true, 301);
