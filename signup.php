<?php
    session_start();
    function redirect($url, $statusCode = 303)
    {
        header('Location: ' . $url, true, $statusCode);
        die();
    }


    $email_login=$_POST["user"];
    $password_login=$_POST["password"];
    $user='root';
    $pass='';
    $dbname='code_for_good';

       if ($email_login && $password_login) {
            $conn = new mysqli('localhost',$user,$pass,$dbname) or die("Connection failed");

            $sql = "SELECT * FROM login WHERE '$email_login' = email";
            $result = $conn->query($sql);
            $row=mysqli_fetch_array($result);
            if($row)
            {
                $fullname=$row['email'];
                $password=$row['password'];
                $_SESSION['id'] = $row['id'];
            }
            if($password==$password_login)
            {
                redirect("adminpanel.html");

            }
            else
                 redirect('adminpanel.html');

        }
    $conn->close();

?>
