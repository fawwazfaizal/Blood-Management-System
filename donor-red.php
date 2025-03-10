<?php
    include('connection.php');
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Donor Registration</title>
        <link rel="stylesheet" type="text/css" href="css/s1.css">
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
                    <h1>Donor Registration</h1>
                    <center><div id="form">
                        <form action="" method="post">
                        <table>
                            <tr>
                                <td width="200px" height="50px">Enter First Name</td>
                                <td width="200px" height="50px"><input type="text" name="name" placeholder="Enter your first Name"></td>
                                <td width="200px" height="50px">Enter Last Name</td>
                                <td width="200px" height="50px"><input type="text" name="lname" placeholder="Enter your last Name"></td>
                            </tr>
                            <tr>
                                <td width="200px" height="50px">Enter Address</td>
                                <td width="200px" height="50px"><textarea name="address"></textarea></td>
                                <td width="200px" height="50px">Enter City</td>
                                <td width="200px" height="50px"><input type="text" name="city" placeholder="Enter your City"></td>
                            </tr>
                            <tr>
                                <td width="200px" height="50px">Enter Age</td>
                                <td width="200px" height="50px"><input type="text" name="age" placeholder="Enter your Age"></td>
                                <td width="200px" height="50px">Select Blood Group</td>
                                <td width="200px" height="50px">
                                    <select name="bgroup">
                                        <option>O+</option>
                                        <option>AB+</option>
                                        <option>AB-</option>
                                        <option>A+</option>
                                        <option>A-</option>
                                        <option>B+</option>
                                        <option>B-</option>
                                        <option>O-</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td width="200px" height="50px">Enter Email</td>
                                <td width="200px" height="50px"><input type="text" name="email" placeholder="Enter your Email"></td>
                                <td width="200px" height="50px">Enter Mobile No</td>
                                <td width="200px" height="50px"><input type="text" name="mno" placeholder="Enter your Mobile No."></td>
                            </tr>
                            <tr>
                                <td><input type="submit" name="sub" value="Save"></td>
                            </tr>
                        </table>
                        </form>
                        <?php
                            if(isset($_POST['sub']))
                            {
                                $name = $_POST['name'];
                                $lname = $_POST['lname'];
                                echo $address = $_POST['address'];
                                $city = $_POST['city'];
                                $age = $_POST['age'];
                                echo $bgroup = $_POST['bgroup'];
                                $mno = $_POST['mno'];
                                $email = $_POST['email'];
                                $q=$db -> prepare ("INSERT INTO donor_registration (name,lname,address,city,age,bgroup,mno,email) VALUES
                                    (:name,:lname,:address,:city,:age,:bgroup,:mno,:email) ");
                                $q -> bindValue('name',$name);
                                $q -> bindValue('lname',$lname);
                                $q -> bindValue('address',$address);
                                $q -> bindValue('city',$city);
                                $q -> bindValue('age',$age);
                                $q -> bindValue('bgroup',$bgroup);
                                $q -> bindValue('mno',$mno);
                                $q -> bindValue('email',$email);
                                if($q -> execute())
                                {
                                    echo "<script>alert('Donor Registration Successful')</script>";
                                }
                                else
                                {
                                    echo "<script>alert('Donor Registration Fail')</script>";
                                }
                            }
                        ?>
                    </div></center>
                </div>
                <div id="footer"><h4 align="center">Copyright@fawwazmakes</h4>
                    <p align="center"><a href="logout.php"><font color="white">Logout</font></a></p>
                </div>
            </div>
        </div>
    </body>
</html>
