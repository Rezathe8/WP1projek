<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5ea6999c53.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>bengkel</title>
</head>

<body class="bodyi">
    <div class="navbar " bgcolor=red>
        <ul class="ul">
            <li class="li">
                <ion-icon name="home-outline"></ion-icon>
                <a href="index.php">Home</a>
            </li>
            <li class="li">
                <ion-icon name="people-circle-outline"></ion-icon>
                <a href="inputan.php">Costumer</a>
            </li>
            
        </ul>

    </div>

    <form action="hasil_input.php" method="post">
        <div class="halaman">
            <div class="input">
                <table class="table">
                    <tr>
                        <td><label for="">masukan nama anda </label></td>
                        <td><input type="text" name="nama"><br></td>
                    </tr>
                    <tr>
                        <td><label for="">masukan no stnk </label></td>
                        <td><input type="number" name="stnk"><br></td>
                    </tr>
                    <tr>
                        <td><label for="">masukan tanggal booking</label></td>
                        <td> <input type="date" name="boking"><br></td>
                    </tr>
                    <tr>
                        <td><label for="">masukan keperluan anda</label></td>
                        <td><input type="text" cols="30" rows="50" name="kerusakan"></td>
                    </tr>
                    <tr>
                        <td> <button type="submit" class="submit">pesan</button>
                            <button type="reset">reset</button>
                        </td>
                    </tr>
                </table>


            </div>
        </div>

    </form>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>