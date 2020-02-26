
<?php
    include_once ("validation.php");

    $firstname = $_POST['firstname'];
      echo $firstname, "<br>";

    $lastname = $_POST['lastname'];
      echo $lastname, "<br>";
    
    $middlename = $_POST['middlename'];
      echo $middlename, "<br>";

    $address = $_POST['address'];
      echo $address, "<br>";

    $birthday = $_POST['birthday']; // your date variable in  '2015-10-10 ' formate
      echo "birthday: ",date('m-d-Y',strtotime($birthday)), "<br>"; // return 10-10-2015
    
    $place = $_POST['place'];
      echo $place, "<br>";

    $gender = $_POST['gender'];
      echo $gender, "<br>";

    $guardian = $_POST['guardian'];
      echo $guardian, "<br>";

    $contact = $_POST['contact'];
      echo $contact, "<br>";

    $status = $_POST['status'];
     echo $status, "<br>";

    $yearlevel = $_POST['yearlevel'];
      echo $yearlevel, "<br>";

    $course = $_POST['course'];
      echo $course, "<br>";

    $schoolyear = $_POST['schoolyear'];
      echo $schoolyear, "<br>";

    $email = $_POST['email'];
      echo $email, "<br><br>";


    if (notEmp($firstname) && notEmp($lastname) && notEmp($middlename) && notEmp($address) && notEmp($birthday) && notEmp($guardian) && notEmp($status) && notEmp($schoolyear) && notEmp($email) && notEmp($contact)){
        echo "Not Empty", "<br>";
    }
    else{
        echo "Empty", "<br>";
    }
    
    /* 2 */
    if (shouldnotNum($firstname) && shouldnotNum($lastname) && shouldnotNum($middlename) &&shouldnotNum($address) && shouldnotNum($place) && shouldnotNum($guardian) && shouldnotNum($status) && shouldnotNum($email)){
        echo "It's a string.", "<br>";
    }
    else{
        echo "It's a number.", "<br>";
    }
    /* 3 */
    if (notSpecialChar($firstname) && notSpecialChar($lastname) && notSpecialChar($middlename) && notSpecialChar($address) && notSpecialChar($birthday) && notSpecialChar($guardian) && notSpecialChar($status) && notSpecialChar($schoolyear) && notSpecialChar($email)){
        echo "It doesn't have any special character.", "<br>";
    }
    else{
        echo "It has a special character.", "<br>";
    }
    /* 4 */
    if (moreThan2($lastname) && moreThan2($firstname)){
        echo "The letters is more than two.", "<br>";
    }
    else{
        echo "The letters is less than two.", "<br>";
    }
    /* 5 */
    if (notags($lastname) && notags($firstname) && notags($middlename) && notags($address) && notags($place) && notags($guardian) && notags($status) && notags($schoolyear) && notags($email)){
       echo "No HTML tags.", "<br>";
    }
    else{
        echo "It has HTML tags.", "<br>"; 
    }
    /* 6 */
    if (emailFormat($email)){
        echo "Valid email Address", "<br>";
    }
    else{
        echo "Invalid enail Address", "<br>";
    }
    /* 7 */
    if (philpreffix($contact)){
        echo "Valid Number";
    }
    else{
        echo "Invalid Number";
    }

?>