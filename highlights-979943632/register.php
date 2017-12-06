<?php
$connection = mysqli_connect("localhost", "Rahul", "123456");
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
        echo('connection to db failed');
        echo($connection);
    }
    echo("Connected successfully \n");
    // To protect MySQL injection for Security purpose
    $username = ($_POST['username']);
    $password = ($_POST['password']);
    $firstname = ($_POST['firstname']);
    $lastname = ($_POST['lastname']);
    $username = stripslashes($username);
    $password = stripslashes($password);
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);
    // Selecting Database
    $db = mysqli_select_db($connection, "hello");
    // SQL query to fetch information of registerd users and finds user match.
    $query = mysqli_query($connection, "select * from login where username='$username';");
    $rows = mysqli_num_rows($query);
    echo("Number of username rows = " + $rows);
    if ($rows == 0) {
        $query = mysqli_query($connection, "insert into userdata values('$username','$firstname','$lastname');");
        echo(mysqli_error($connection));
        $query = mysqli_query($connection, "insert into LoginData values('$username','$password');");
        echo(mysqli_error($connection));
        $_SESSION['error'] = "Registration Successful";
        header("location: Login.html");
    }
    else {
        $error = "Username is occupied, try another!";
        $_SESSION['error'] = $error;
        header("location: ../signup.html"); // Redirecting To Registration Page
        }
    mysqli_close($connection); // Closing Connection
  ?>
