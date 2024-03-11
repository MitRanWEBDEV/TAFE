<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Process Registration</title>
</head>

<body>
    <?php
    //check if values have been set
    if (isset($_POST["mode"])) {
        $mode = $_POST["mode"];
    } else {
        $mode = "Not supplied";
    }
    if (empty($_POST["firstName"])) {
        $firstName = "Not supplied";
    } else {
        $firstName = $_POST["firstName"];
    }
    if (isset($_POST["lastName"]) && strlen($_POST["lastName"]) == 0) {
        $lastName = "Not supplied";
    } else {
        $lastName = $_POST["lastName"];
    }

    if (isset($_POST["password1"]) && (!$_POST["password1"])) {
        $password1 = "Not supplied";
    } else {
        $password1 = $_POST["password1"];
    }
    if (empty($_POST["password2"])) {
        $password2 = "Not supplied";
    } else {
        $password2 = $_POST["password2"];
    }
    if (empty($_POST["comments"])) {
        $comments = "Not supplied";
    } else {
        $comments = $_POST["comments"];
    }
    //process multi selections
    $coursesStudied = "";
    $newsletters = "";
    if (isset($_POST["course"])) {
        foreach ($_POST["course"] as $course) {
            $coursesStudied = $coursesStudied . $course . ", ";
        }
    }
    if (isset($_POST["newsletter"])) {
        foreach ($_POST["newsletter"] as $newsletter) {
            $newsletters = $newsletters . $newsletter . ", ";
        }
    }
    //remove last comma
    $coursesStudied = rtrim($coursesStudied, ', ');
    $newsletters = rtrim($newsletters, ', ');
    ?>
<!-- display information on the page -->
    <h1>Thank you</h1>
    <p>Thank you for registering. Here is the information you submitted:</p>
    <dl>
        <dt>First name</dt>
        <dd><?= $firstName ?></dd>
        <dt>Last name</dt>
        <dd><?= $lastName ?></dd>
        <dt>Password</dt>
        <dd><?= $password1 ?></dd>
        <dt>Retyped password</dt>
        <dd><?= $password2 ?></dd>
        <dt>Study mode</dt>
        <dd><?= $mode ?></dd>
        <dt>Course</dt>
        <dd><?= $coursesStudied ?></dd>
        <dt>Do you want to receive our newsletter?</dt>
        <dd><?= $newsletters ?></dd>
        <dt>Comments</dt>
        <dd><?= $comments ?></dd>
    </dl>
</body>

</html>