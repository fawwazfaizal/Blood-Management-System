<?php
    include('connection.php');
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Donor List</title>
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
                    <?php
                    $un=$_SESSION['un'];
                    if(!$un)
                    {
                        header("Location:index.php");
                    }
                    ?>
                    <h1>Donor List</h1>
                    <center><div id="form">
                        <table>
                            <tr>
                                <td><center><b><font color="blue">First Name</font></b></center></td>
                                <td><center><b><font color="blue">Last Name</font></b></center></td>
                                <td><center><b><font color="blue">Address</font></b></center></td>
                                <td><center><b><font color="blue">City</font></b></center></td>
                                <td><center><b><font color="blue">Age</font></b></center></td>
                                <td><center><b><font color="blue">Blood Group</font></b></center></td>
                                <td><center><b><font color="blue">Email</font></b></center></td>
                                <td><center><b><font color="blue">Mobile No</font></b></center></td>
                            </tr>
                            <?php
                                $q=$db->query("SELECT * FROM donor_registration");
                                while($r1 = $q -> fetch(PDO::FETCH_OBJ))
                                {
                                    ?>
                                    <tr>
                                    <td><center><?= $r1-> name; ?></center></td>
                                    <td><center><?= $r1-> lname; ?></center></td>
                                    <td><center><?= $r1-> address; ?></center></td>
                                    <td><center><?= $r1-> city; ?></center></td>
                                    <td><center><?= $r1-> age; ?></center></td>
                                    <td><center><?= $r1-> bgroup; ?></center></td>
                                    <td><center><?= $r1-> email; ?></center></td>
                                    <td><center><?= $r1-> mno; ?></center></td>
                                    <td class="action-buttons">
                                        <a href="update-donor.php?id=<?= $r1->id; ?>" class="update">Update</a>
                                        <a href="delete-donor.php?id=<?= $r1->id; ?>" class="delete">Delete</a>
                                    </td>
                                    </tr>
                                    <?php
                                }
                            ?>
                        </table>
                    </div></center>
                </div>
                <div id="footer"><h4 align="center">Copyright@fawwazmakes</h4>
                    <p align="center"><a href="logout.php"><font color="white">Logout</font></a></p>
                </div>
            </div>
        </div>
    </body>
</html>
