<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}

include_once "includes/db.php";
include_once "includes/functions.php";

$username = $_SESSION['username'];
$userData = getUserData($conn, $username);
?>

<!DOCTYPE html>
<html lang="en">
<!-- Similar to other HTML files -->
<body>
    <h1>Welcome, <?php echo $username; ?></h1>
    <form id="profile-form">
        <input type="text" id="age" placeholder="Age" value="<?php echo $userData['age']; ?>">
        <input type="text" id="dob" placeholder="Date of Birth" value="<?php echo $userData['dob']; ?>">
        <input type="text" id="contact" placeholder="Contact" value="<?php echo $userData['contact']; ?>">
        <button type="submit">Update Profile</button>
    </form>
</body>
</html>
