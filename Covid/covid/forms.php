<?php

include 'database.php';

// We verify that data are correct
if ($_POST['npc'] ?? null && $_POST['ndc'] ?? null && $_POST['nrc'] ?? null && $_POST['nm'] ?? null && $_POST['nf'] ?? null && $_POST['date'] ?? null && $_POST['region'] ?? null) {
    $num_pos_cases = $_POST['npc'];
    $num_deces = $_POST['ndc'];
    $num_recv_cases = $_POST['nrc'];
    $num_males = $_POST['nm'];
    $num_females = $_POST['nf'];
    $date = $_POST['date'];
    $region = $_POST['region'];

    $c = $db->prepare('INSERT INTO Statistics (No_Of_Positive_Cases, No_Of_Death_Cases, No_Of_Recovered_Cases, Number_of_Males, Number_of_Females, Region, Date, User_ID) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
    $c->execute(array($num_pos_cases, $num_deces, $num_recv_cases, $num_males, $num_females, $region, $date, $_SESSION['user_id']));

    header('Location: stats.php', true, 301);
    exit();
}

header('Location: forms.html', true, 301);
