

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/5ea6999c53.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
</head>

<?php
if (isset($_POST['submit'])) {
    $user = $_POST['username'];
    $sandi = $_POST['password'];
    if ($user == 'supri' || $user == 'reza' and $sandi == '1234') {
        header('location:admin_1.php');
    } else {
        echo "<script> alert ('gagal masuk')</script>";
        
        //header('location:index.php');
    }
}

?>

<body class="bodyi">
        <div class="rowlogin">
            <h2>selamat datang admin silakan login dahulu</h2>
            <div class="colmasuk">
                <form action="" method="post">
                    <label for="user" class="label">masukan id admin</label><br>
                    <input type="text" id="user" class="username" size="25" name="username"> <br>
                    <label for="password" class="label-1">masukan password</label><br>
                    <input type="password" class="password" id="password" size="25" name="password"> <br>
                    <button type="submit" id="submit" class="button" name="submit"> log in</button>


                </form>
            </div>
        </div>

</body>

</html>