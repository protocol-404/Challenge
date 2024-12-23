<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form>
        <label for="">User name</label>
        <input type="text" name="name" required>
        <br>
        <label for="">Email</label>
        <input type="text" name="email"required>
        <br>
        <label for="">Role</label>
        <input type="text" name="role" required>
        <br>
        <button method="POST">submite</button>
    </form>
</body>
</html>

<?php
require_once 'config.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = ($conn, $_POST['name']);
    $email = ($conn, $_POST['email']);
    $role = ($conn, $_POST['role']);


}

?>