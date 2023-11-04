<?php
//cek apakah sudah di submit
if (isset($_POST["submit"])) {
    //cek kebenaran user dan pass
    if ($_POST["user"] == "kepo" && $_POST["pass"] == "kepo") {
        //redirect jika benar
        header("Location: page2.php");
    } else {
        //jika salah tampilkan msg
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="nama">Inputkan Username</label>
        <input type="text" name="user" id="nama" required>
        <br>
        <label for="pass">Inputkan Password</label>
        <input type="password" name="pass" id="pass" required>
        <br>
        <button type="submit" name="submit">GAss</button>
    </form>
    <?php if (isset($error)):?>
        <p>User/pass salah!</p>
    <?php endif; ?>
</body>

</html>