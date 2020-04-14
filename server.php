<?php
    session_start();

    // initialize variable
    $name = "";
    $address =""; 
    $id = 0;
    $edit_state = false;

    // connect to database
    $db = mysqli_connect('localhost', 'root', '', 'registration');

    // if save button is clicked
    if (isset($_POST['save'])) {
        $name = $_POST['name'];
        $address = $_POST['address'];

        $query = "INSERT INTO users (name, address) VALUES ('$name', '$address')";
        mysqli_query($db, $query);
        $_SESSION['msg'] = "Address saved";
        header('location: records.php'); // redirect to records page after inserting
    }
    
    // update records
    if (isset($_POST['update'])) {
        $name = mysqli_real_escape_string($_POST['name']);
        $address = mysqli_real_escape_string($_POST['address']);
        $id = mysqli_real_escape_string($_POST['id']);

        mysqli_query($db, "UPDATE users SET name='$name', address='$address' WHERE id=$id");
        $_SESSION['msg'] = "Address Updated";
        header('location: records.php');
    }

    // delete records
    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($db, "DELETE FROM users WHERE id=$id");
        $_SESSION['msg'] = "Address Deleted";
        header('location: records.php');
    }

    // retrive records
    $results = mysqli_query($db, "SELECT * FROM users");
?>