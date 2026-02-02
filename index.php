<?php include "db.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Student CRUD</title>
</head>

<body>

<div class="container">
    <h2>🎓 Student Management</h2>

    <form method="post">
        <input type="text" name="name" placeholder="Student Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="mobile" placeholder="Mobile" required>
        <input type="text" name="department" placeholder="Department" required>
        <button type="submit" name="save">Add Student</button>
    </form>

    <?php
    if (isset($_POST['save'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $dept = $_POST['department'];

        mysqli_query($conn, "INSERT INTO student VALUES (NULL,'$name','$email','$mobile','$dept')");
    }
    ?>

    <table>
        <tr>
            <th>ID</th><th>Name</th><th>Email</th><th>Mobile</th><th>Dept</th><th>Action</th>
        </tr>

        <?php
        $result = mysqli_query($conn, "SELECT * FROM student");
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['mobile'] ?></td>
            <td><?= $row['department'] ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
                <a href="delete.php?id=<?= $row['id'] ?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>

</body>

<style>
body {
    font-family: Segoe UI, Arial;
    background: linear-gradient(135deg, #667eea, #764ba2);
}

.container {
    width: 800px;
    margin: 40px auto;
    background: #fff;
    padding: 25px;
    border-radius: 14px;
}

h2 {
    text-align: center;
    color: #5a4fcf;
}

form input {
    padding: 10px;
    margin: 5px;
    width: 180px;
}

button {
    padding: 10px 15px;
    background: #667eea;
    color: white;
    border: none;
    border-radius: 6px;
}

table {
    width: 100%;
    margin-top: 20px;
    border-collapse: collapse;
}

th, td {
    padding: 10px;
    border-bottom: 1px solid #ddd;
}
</style>

</html>