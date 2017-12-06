<?php
        $connection = mysqli_connect("localhost", "Rahul", "123456");
        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
            echo('connection to db failed');
            echo($connection);
            }

            // Selecting Database
            $db = mysqli_select_db($connection, "hello");
            // SQL query to fetch information of registerd users and finds user match.
            $query = mysqli_query($connection, "select username, firstname, lastname from userdata;");
            $rows = mysqli_num_rows($query);
            if ($rows > 0) {
                echo("<table style=\"width:100%\">
                          <tr>
                            <th>Username</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                          </tr>");
                while ($user = $query->fetch_assoc()) {
                    echo("<tr>
                            <td>".$user['username']."</td>
                            <td>".$user['firstname']."</td>
                            <td>".$user['lastname']."</td>
                          </tr>");
                }
                echo("</table>");
            }
            else{
                echo("No Users @ Highlights Gaming");
            }
            mysqli_close($connection);
      ?>
