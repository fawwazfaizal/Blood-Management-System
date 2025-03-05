<?php
    include('connection.php');
    session_start();

    if(!isset($_SESSION['un'])) 
    {
        header("Location: index.php");
        exit();
    }

    if(isset($_GET['id'])) 
    {
        $id = $_GET['id'];
        $deleteQuery = $db->prepare("DELETE FROM donor_registration WHERE id = ?");
        $deleteQuery->execute([$id]);

        header("Location: donor-list.php");
        exit();
    } 
    else 
    {
        echo "Invalid request!";
        exit();
    }
?>
