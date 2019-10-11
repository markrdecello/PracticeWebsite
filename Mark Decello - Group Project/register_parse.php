<?php
    include("connect.php");
    include("functions.php");

    // Both username and password fields are filled in
    // Username contains invalid characters
    // Password - min length >= 8

    $username = $_POST['username'];
    $password = $_POST['password'];

    $MIN_LENGTH = 8;

    if ($username == "" || $password == "") {
      echo "Username and Password field must be filled in.";
    } else {
        if (hasInvalidCharacters($username)) {
          echo "Username can only contain letters [a-z A-Z] and numbers
          from [0-9].";
        } else {
          if (strlen($password) >= $MIN_LENGTH) {
            //INSERT USERNAME AND PASSWORD IN DATABASE

            $password = encrypt($password);

            $sql = "INSERT INTO forum.users(username, password)
                    VALUES (?, ?);
            ";

            // $res = mysqli_query($link, $sql);
            $stmt = $mysqli->prepare($sql);
            $stmt->bind_param('ss', $username, $password);

            if ($stmt->execute()) {
              echo "Successfully registered as: ".$username;
            } else {
              echo "Failed to register, please try again. (Please make sure that
              you've filled in all of the blanks in the form)<br>";
              echo "Mysql Error: ".mysqli_connect_error($mysqli);
            }
          } else {
            echo "Please enter a password with a minimum length of 8 characters.";
          }
        }
    }
?>
