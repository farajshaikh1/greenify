<?php
//define variables and set to empty values
$name_error = $email_error = $phone_error = $message_error1 = "";
$name = $email = $phone = $message = $success = $message_error = "";

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if (isset($_POST['name'])) {

    if (empty($_POST["name"])) {
        $name_error = "Name cannot be blank";
    } else {
        ($name = test_input($_POST["name"]));
        //check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $name_error = "Only letters and white space are allowed";
        }
    }
    if (empty($_POST["email"])) {
        $email_error = "Email field is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = "Email format is invalid";
        }
    }
    if (empty($_POST["phone"])) {
        $phone_error = "Phone number is required";
    } else {
        ($phone = test_input($_POST["phone"]));
        //check 1f phone number is well-formed
        if (!preg_match("/^01(?!5)\d\d{7,8}$/", $phone)) {
            $phone_error = "Phone number is invalid";
        }
    }
    if (empty($_POST["message"])) {
        $message_error1 = "Message field is required";
    } else {
        ($message = test_input($_POST["message"]));
        if (!preg_match('/^[\s\S]{10,}$/', strtolower($_POST['message']))) {
            $message_error1 = "Message should be more than 10 characters";
        }
    }
    if ($name_error == '' and $email_error == '' and $phone_error == '' and $message_error1 == '') {
        //connect to the database
        $conn = mysqli_connect("localhost", "root", "", "greenify_database");
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $is_done = $conn->query("INSERT INTO `contact_details`( `name`, `email`, `phone`, `message` ) VALUES( '$name','$email','$phone','$message' )");
        if ($is_done == TRUE) {
            $success = "Message has been delivered";
            $name = $email = $phone = $message = '';
        } else {
            $message_error = "Message could not be delivered";;
        }
    }
}
