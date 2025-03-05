<?php
    include('connection.php');
    session_start();
    $id = $_GET['id'];
    $q = $db->query("SELECT * FROM donor_registration WHERE id = $id");
    $r1 = $q->fetch(PDO::FETCH_OBJ);

    if($_POST) {
        $name = $_POST['name'];
        $lname = $_POST['lname'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $age = $_POST['age'];
        $bgroup = $_POST['bgroup'];
        $email = $_POST['email'];
        $mno = $_POST['mno'];

        $query = $db->query("UPDATE donor_registration SET name = '$name', lname = '$lname', address = '$address', city = '$city', age = '$age', bgroup = '$bgroup', email = '$email', mno = '$mno' WHERE id = $id");

        if($query) {
            header("Location:donor-list.php");
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Update Donor</title>
        <link rel="stylesheet" type="text/css" href="css/s1.css">
        <style>
            td {
                width: 200px;
                height: 40px;
            }
            #form {
                max-height: 400px; 
                overflow-y: auto;
            }
        </style>
    </head>
    <body>
        <div id="full">
            <div id="inner-full">
                <div id="header"><h2><a href="admin-home.php" style="text-decoration: none;color: white;">Blood Bank Management System</a></h2></div>
                <div id="body">
                    <br>
                    <h1>Update Donor Details</h1>
                    <center><div id="form">
                        <form action="" method="post">
                            <table>
                                <tr>
                                    <td>First Name</td>
                                    <td><input type="text" name="name" value="<?= $r1->name; ?>" required></td>
                                </tr>
                                <tr>
                                    <td>Last Name</td>
                                    <td><input type="text" name="lname" value="<?= $r1->lname; ?>" required></td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td><input type="text" name="address" value="<?= $r1->address; ?>" required></td>
                                </tr>
                                <tr>
                                    <td>City</td>
                                    <td><input type="text" name="city" value="<?= $r1->city; ?>" required></td>
                                </tr>
                                <tr>
                                    <td>Age</td>
                                    <td><input type="number" name="age" value="<?= $r1->age; ?>" required></td>
                                </tr>
                                <tr>
                                    <td>Blood Group</td>
                                    <td><input type="text" name="bgroup" value="<?= $r1->bgroup; ?>" required></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><input type="email" name="email" value="<?= $r1->email; ?>" required></td>
                                </tr>
                                <tr>
                                    <td>Mobile No</td>
                                    <td><input type="text" name="mno" value="<?= $r1->mno; ?>" required></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <input type="submit" value="Update">
                                        <a href="donor-list.php" class="close-btn">Close</a>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div></center>
                </div>
                <div id="footer"><h4 align="center">Copyright@fawwazmakes</h4>
                    <p align="center"><a href="logout.php"><font color="white">Logout</font></a></p>
                </div>
            </div>
        </div>
    </body>
</html>
