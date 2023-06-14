<?php
    if(isset($_POST['submit'])){
        // turn POST data into variables
        $username = $_POST['username'];
        $password = $_POST['password'];
        // connect to database
        $dbc = mysqli_connect('localhost', 'root', '', 'mydb')
            or die('Error connecting to MySQL server.');



        // Ready the SQL string for checking if username is taken
        $query = "SELECT username from users where username='$username'";
        // perform the request
        $result = mysqli_query($dbc, $query)
            or die('Error querying the database');
        
        // checks if username is taken
        if ($result->num_rows > 0) {
            die('Username taken, please try again <a href="registerUser.html">here</a>.');
        }
        
        // Ready the SQL string
        $query = "INSERT INTO users VALUE ('$username', '$password')";
        // perform the request
        $result = mysqli_query($dbc, $query)
            or die('Error querying the database');
        // disconnect from database
        mysqli_close($dbc);
        // check if the query yielded results
        if ($result) {
            // registration sucess
            echo "Thank you for registering, you can now <a href='index.html'>log in here</a>.";
        } else {
            // registration failed
            echo "Something went wrong, please try again <a href='registerUser.html'>here</a>.";
        }
        
    } else {
        header('location: index.html');
    }
?>