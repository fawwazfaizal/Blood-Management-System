<?php
    include('connection.php');
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin Login</title>
        <link rel="stylesheet" type="text/css" href="css/s1.css">
    </head>
    <body>
        <div id="full">
            <div id="inner-full">
                <div id="header"><h2>Blood Bank Management System</h2></div>
                <div id="body">
                    <br><br><br><br><br>
                    <form action="" method="post">
                    <table align="center">
                        <tr>
                            <td width="200px" height="70px"><b>Enter Username</b></td>
                            <td width="200px" height="70px"><input type="text" name="un" placeholder="Enter Username" 
                            style="width: 150; height: 50px; border-radius: 10"></td>
                        </tr>
                        <tr>
                            <td width="200px" height="70px"><b>Enter Password</b></td>
                            <td width="200px" height="70px"><input type="password" name="ps" placeholder="Enter Password" 
                            style="width: 150; height: 50px; border-radius: 10"></td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="sub" value="Login"style="width: 70; height: 30px; border-radius: 5"></td>
                            <td><p align="center"><a href="signup.php"><font color="purple">Don't have an account? Sign Up here</font></a></p></td>
                        </tr>
                    </table>
                    <?php
                    if(isset($_POST['sub']))
                    {
                        $un = $_POST['un'];
                        $ps = $_POST['ps'];
                        $q=$db -> prepare(" SELECT * FROM admin where uname='$un' && pass='$ps' ");
                        $q -> execute();
                        $res=$q -> fetchAll(PDO::FETCH_OBJ);
                        if($res)
                        {
                            $_SESSION['un']=$un;
                            header("Location:admin-home.php");
                        }
                        else
                        {
                            echo "<script>alert('Wrong User or Password');</script>";
                        }
                    }
                    ?>
                </div>
                <div id="footer"><h4 align="center">Copyright@fawwazmakes</h4></div>
            </div>
        </div>
    </body>
</html>
