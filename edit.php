<?php
include "db.php";
$id = $_GET['id'];

$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM student WHERE id=$id"));

if (isset($_POST['update'])) {
    mysqli_query($conn,
        "UPDATE student SET
        name='$_POST[name]',
        email='$_POST[email]',
        mobile='$_POST[mobile]',
        department='$_POST[department]'
        WHERE id=$id"
    );
    header("Location: index.php");
}
?>

<form method="post">
    <input name="name" value="<?= $data['name'] ?>">
    <input name="email" value="<?= $data['email'] ?>">
    <input name="mobile" value="<?= $data['mobile'] ?>">
    <input name="department" value="<?= $data['department'] ?>">
    <button name="update">Update</button>
</form>