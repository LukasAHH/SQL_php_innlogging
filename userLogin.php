<?php
    if(isset($_POST['submit'])){
        // turn POST data into variables
        $username = $_POST['username'];
        $password = $_POST['password'];


        // connect to database
        $dbc = mysqli_connect('localhost', 'root', '', 'mydb')
            or die('Error connecting to MySQL server.');

        // Ready the SQL string
        $query = "SELECT username, password from users where username='$username' and password='$password'";

        // perform the request
        $result = mysqli_query($dbc, $query)
            or die('Error querying the database');
          
        // disconnect from database
        mysqli_close($dbc);

        // check if the query yielded results
        if($result->num_rows > 0){
            // valid login
            header('location: loginSuccess.html');
        } else {
            header('location: loginFail.html');
        }
    } else {
        header('location: index.html');
    }
?>