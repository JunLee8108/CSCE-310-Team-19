<?php

function emptyInputSignup($firstName, $lastName, $email, $password, $passwordRepeat, $age)
{
    $result = false;
    if (empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($passwordRepeat) || empty($age)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidAge($age)
{
    $result = false;
    // Search Algorithm
    if (!preg_match("/^[0-9]*$/", $age)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidUid($email)
{
    $result = false;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function pwdMatch($password, $passwordRepeat)
{
    $result = false;
    if ($password !== $passwordRepeat) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function emailExists($conn, $email)
{
    $sql = "SELECT * FROM Users WHERE Email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../pages/SignUp.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function createUser($conn, $firstName, $lastName, $email, $age, $password)
{
    $sql = "INSERT INTO Users (FirstName, LastName, Email, Age, UserPassword) VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../pages/SignUp.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssss", $firstName, $lastName, $email, $age, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

function emptyInputLogin($email, $password)
{
    $result = false;
    if (empty($email) || empty($password)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $email, $password)
{
    $emailExists = emailExists($conn, $email);

    if ($emailExists === false) {
        header("location: ../pages/SignIn.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $emailExists["UserPassword"];
    $checkpwd = password_verify($password, $pwdHashed);

    if ($checkpwd === false) {
        header("location: ../pages/SignIn.php?error=wronglogin");
        exit();
    } else if ($checkpwd === true) {
        session_start();

        $_SESSION["userid"] = $emailExists["UserID"];
        $_SESSION["useremail"] = $emailExists["Email"];
        $_SESSION["userpassword"] = $emailExists["UserPassword"];
        $_SESSION["userfirstname"] = $emailExists["FirstName"];
        $_SESSION["userlastname"] = $emailExists["LastName"];
        $_SESSION["userage"] = $emailExists["Age"];
        header("location: ../pages/Home.php");
        exit();
    }
}

function emptyInputItem($itemType, $weight)
{
    $result = false;
    if (empty($itemType) || empty($weight)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidWeight($weight)
{
    $result = false;
    // Search Algorithm
    if (!preg_match("/^[+-]?([0-9]+([.][0-9]*)?|[.][0-9]+)$/", $weight)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function createItem($conn, $itemType, $weight)
{
    $sql = "INSERT INTO Item (ItemType, ItemWeight) VALUES (?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../pages/Item.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $itemType, $weight);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../pages/Item.php?error=none");
    exit();
}

function updateProfile($conn, $firstName)
{
    $userEmail = $_SESSION["useremail"];
    $sql = "UPDATE Users SET FirstName='$firstName' WHERE UserID='{$_SESSION['userid']}'";
    mysqli_query($conn, $sql);
    mysqli_close($conn);



    // $sql = "UPDATE Users SET FirstName = ?, LastName = ?, Email = ?, Age = ?, UserPassword = ? WHERE UserID = $userid;";
    // $stmt = mysqli_stmt_init($conn);
    // if (!mysqli_stmt_prepare($stmt, $sql)) {
    //     header("location: ../pages/Profile.php?error=stmtfailed");
    //     exit();
    // }

    // $email_exist = $_SESSION['useremail'];

    // $emailExists = emailExists($conn, $email_exist);
    // $pwdHashed = $emailExists["UserPassword"];
    // $checkpwd = password_verify($password, $pwdHashed);
    // $hashedPwd = "";

    // if ($checkpwd === false) {
    //     $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
    // } else if ($checkpwd === true) {
    //     $hashedPwd = $_SESSION["userpassword"];
    // }

    // mysqli_stmt_bind_param($stmt, "sssss", $firstName, $lastName, $email, $age, $hashedPwd);
    // mysqli_stmt_execute($stmt);
    // mysqli_stmt_close($stmt);
    header("location: ../pages/Profile.php?error=none");
    exit();
}
