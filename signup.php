<?php
include('connection.php');
session_start();
if (isset($_POST['register'])) {
    $un = $_POST['un'];
    $ps = $_POST['ps'];
    $cps = $_POST['cps'];

    if ($ps === $cps) {
        $q = $db->prepare("INSERT INTO admin (uname, pass) VALUES (:un, :ps)");
        $q->bindParam(':un', $un);
        $q->bindParam(':ps', $ps);
        if ($q->execute()) {
            echo "<script>alert('Registration successful!'); window.location.href='index.php';</script>";
        } else {
            echo "<script>alert('Error registering user.');</script>";
        }
    } else {
        echo "<script>alert('Passwords do not match.');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" type="text/css" href="css/s1.css">
    </head>
    <body>
        <div id="full">
            <div id="inner-full">
                <div id="header" align="center"><h2>Sign Up</h2></div>
                <div id="body">
                    <br><br>
                    <form action="" method="post">
                        <table align="center">
                            <tr>
                                <td><b>Enter Username</b></td>
                                <td><input type="text" name="un" placeholder="Enter Username" required></td>
                            </tr>
                            <tr>
                                <td><b>Enter Password</b></td>
                                <td><input type="password" name="ps" placeholder="Enter Password" required></td>
                            </tr>
                            <tr>
                                <td><b>Confirm Password</b></td>
                                <td><input type="password" name="cps" placeholder="Confirm Password" required></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <input type="submit" name="register" value="Sign Up">
                                    <a href="index.php" style="text-decoration: none;">
                                    <button type="button" style="background-color: red; color: white; border-radius: 5px; 
                                    padding: 10px; cursor: pointer;">Close</button></a>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
