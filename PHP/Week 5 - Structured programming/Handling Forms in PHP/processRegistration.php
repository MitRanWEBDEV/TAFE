<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process Registration</title>
</head>

<!-- Activity 1: Registration form || COMMENTED OUT
    <body>
    <h1>Thank you!</h1>
    <p>Thank you for registering, ?php echo $_POST["firstName"]; ?>. Here is the information you submitted</p>
    <ul>
        <li>First name: ? echo $_POST["firstName"]; ?> </li>
        <li>Last name: ? echo $_POST["lastName"]; ?> </li>
        <li>Password: ? echo $_POST["password1"]; ?> </li>
        <li>Course: ? echo $_POST["course"]; ?> </li>
        <li>Mode: ? echo $_POST["mode"]; ?> </li>
        <li>Newsletter: ? echo $_POST["newsletter"]; ?> </li>
        <li>Comments: ? echo $_POST["comments"]; ?> </li>
    </ul>
</body> -->

<!-- Activity 2: Checking for empty fields || COMMENTED OUT
?php
if (isset($_POST["newsletter"])) {
    $newsletter = "You have subscribed to the newsletter";
} else {
    $newsletter = "You have not subscribed to the newsletter";
};

if (!empty($_POST["mode"])) {
    $mode = $_POST["mode"];
} else {
    $mode = "You have not selected a method of enrolement";
};
?>

<body>
    <h1>Thank you!</h1>
    <p>Thank you for registering, ?php echo $_POST["firstName"]; ?>. Here is the information you submitted</p>
    <ul> THE OPENING TAG FOR INLINE PHP HAS BEEN REMOVED
        <li>First name: ? echo $_POST["firstName"]; ?> </li>
        <li>Last name: ? echo $_POST["lastName"]; ?> </li>
        <li>Password: ? echo $_POST["password1"]; ?> </li>
        <li>Course: ? echo $_POST["course"]; ?> </li>
        <li>Mode: ? echo $mode ?> </li>
        <li>Newsletter: ? echo $newsletter ?> </li>
        <li>Comments: ? echo $_POST["comments"]; ?> </li>
    </ul>
</body>
-->
<!-- Additional Practice - Check all fields are not empty before displaying them -->
<?php
//check firstName is set and the length is greater than 3
if (isset($_POST["firstName"]) && strlen($_POST["firstName"]) > 3) {
    $firstName = $_POST["firstName"];
} else {
    $firstName = "Please enter a valid first name";
}
//check lastName is set and the length is greater than 3
if (isset($_POST["lastName"]) && strlen($_POST["lastName"]) > 3) {
    $lastName = $_POST["lastName"];
} else {
    $lastName = "Please enter a valid last name";
}
//check password1 is set and the length is greater than 3
if (isset($_POST["password1"]) && strlen($_POST["password1"]) > 3) {
    $password1 = $_POST["password1"];
} else {
    $password1 = "Please enter a valid password";
}
//check course is set
if (isset($_POST["course"])) {
    $course = $_POST["course"];
} else {
    $course = "Please select a course";
}
//check mode is set
if (isset($_POST["mode"])) {
    $mode = $_POST["mode"];
} else {
    $mode = "Please select a mode";
}
//check newsletter is set
if (isset($_POST["newsletter"])) {
    $newsletter = "You have subscribed to the newsletter";
} else {
    $newsletter = "You have not subscribed to the newsletter";
}
//check comments is set and not empty. if empty, set to default message, else set to comments
if (isset($_POST["comments"]) && !empty($_POST["comments"])) {
    $comments = $_POST["comments"];
} else {
    $comments = "You have not submitted any comments";
}
?>
<!-- display the information on the page -->
<body>
    <h1>Thank you!</h1>
    <p>Thank you for registering, <?php echo $_POST["firstName"]; ?>. Here is the information you submitted</p>
    <ul>
        <li>First name: <? echo $firstName ?> </li>
        <li>Last name: <? echo $lastName ?> </li>
        <li>Password: <? echo $password1 ?> </li>
        <li>Course: <? echo $course ?> </li>
        <li>Mode: <? echo $mode ?> </li>
        <li>Newsletter: <? echo $newsletter ?> </li>
        <li>Comments: <? echo $comments ?> </li>
    </ul>
</body>

</html>