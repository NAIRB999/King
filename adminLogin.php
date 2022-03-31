<?php 
    
    include_once('header.php');
    include_once('connect.php');

    
if (isset($_POST['btnlogin'])) 
{
    
    $name=$_POST['txtname'];
    $Password=$_POST['txtpassword'];
    $role=$_POST['cborole'];
    
    $insert="Select * from tbladmin 
            where username='$name'
            and password='$Password'
            and role='$role'";
    $ret=mysqli_query($connection,$insert);
    $row=mysqli_fetch_array($ret);
    $count=mysqli_num_rows($ret);

    if($count==0)
    {
        if(!isset($_COOKIE['loginCount']))
        {   
            $logInCount=1;
        }
        else
        {
            $logInCount=$_COOKIE['loginCount'];
            $logInCount++;
        }
        setcookie('loginCount',$logInCount,time()+100);
        if($logInCount>=3)
        {
            die("login fail 3 times,Try again in 1 minute");
        }
        else
        {
            echo '<script type="text/javascript">alert("CHECK Username and Password correctly");
                   window.location.href="adminlogin.php";</script>';
        }
    }
    else
    {
        $_SESSION["adminid"]=$row["adminid"];
        $_SESSION["role"]=$role;
        echo '<script type="text/javascript">alert("Success");
                   window.location.href="index.php";</script>';
    }

    
}

 ?>
<!DOCTYPE HTML>
<!--
    Intensify by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
    <head>
        <title>The King University</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/main.css" />
    </head>
    <body class="subpage">

        

        <!-- Main -->
            <section id="main" class="wrapper">
                <div class="inner">
                    <header class="align-center">
                        <h1>The King University</h1>
                        <!-- <p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p> -->
                    </header>
                    <div class="image fit">
                        <img src="images/uni4.jpg" alt="" />

                        <!-- Form -->
                        <br>
                        <h3>Admin Login Form</h3>

                        <form method="post" action="#">
                                <div class="row uniform 50%">
                                    <div class="6u 12u$(xsmall)">
                                        <input type="text" name="txtname" id="name" value="" placeholder="Enter User Name" />
                                    </div>
                                    <div class="6u$ 12u$(xsmall)">
                                        <input type="password" name="txtpassword" id="password" value="" placeholder="Enter Password" />
                                    </div>

                                     <div class="6u$ 12u$(xsmall)">
                                       <select id="name" name="cborole">
                                                <option>Choose Role</option>
                                                <option>Marketing Manager</option>
                                                <option>Marketing Coordinator</option>
                                                <option>Administrator</option>
                                            </select>
                                    </div>
                                 
                                    <div class="12u$">
                                        <ul class="actions">
                                            <li><input type="submit" value="Login" name="btnlogin" class="special" /></li>
                                            <li><input type="reset" value="Cancel" /></li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                    </div>
                    
                </div>
            </section>

        <!-- Footer -->
            <footer id="footer">
                <div class="inner">
                    <h2>Get In Touch</h2>
                    <ul class="actions">
                        <li><span class="icon fa-phone"></span> <a href="#">(000) 000-0000</a></li>
                        <li><span class="icon fa-envelope"></span> <a href="#">information@untitled.tld</a></li>
                        <li><span class="icon fa-map-marker"></span> 123 Somewhere Road, Nashville, TN 00000</li>
                    </ul>
                </div>
                <div class="copyright">
                    &copy; 2020. Design <a href="#">by</a>. The King @  <a href="#">Univeristy</a>.
                </div>
            </footer>

        <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>

    </body>
</html>