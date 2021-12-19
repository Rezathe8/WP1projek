<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5ea6999c53.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body class="body_admin">
    <div class="navbar ">
        <ul class="ul">

            <li class="li">

                <ion-icon name="home-outline"></ion-icon>
                <a href="index.php">home</a>
            </li>
            <li class="li">

            <li class="li">
                <ion-icon name="log-out-outline"></ion-icon>
                <a href="index.php">log out</a>
            </li>

        </ul>

    </div>

    <div class="marquee">
        <h1>
            <marquee scrollamount="10"> SELAMAT DATANG ADMIN 'SEMANGAT UNTUK BEKERJA' 🤞🤞❤❤❤</marquee>
        </h1>
    </div>

    <form action="print.php" method="post">
        <div class="halaman">
            <div class="tabel">
                <table class="table" border="4" cellpadding="10px">
                    <tr class="colom">
                        <td>nama costumer</td>
                        <td><input type="text" cols=30px name="castamer"></td>
                    </tr>
                    <tr class="colom">
                        <td>no stnk</td>
                        <td><input type="number" name="stnk"></td>
                    </tr>
                    <tr class="colom">
                        <td>tanggal pesan</td>
                        <td><input type="date" name="tanggal" id=""></td>
                    </tr>
                    <tr class="colom">
                        <td>kerusakan</td>
                        <td><input type="text" cols="30" rows='50' name="kerusakan"></td>
                    </tr>
                    <tr class="colom">
                        <td align="center"><button type="submit" >submit</button></td>
                        <td align="center"><button type="reset">reset</button></td>
                    </tr>

                </table>
            </div>
        </div>
    </form>



    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>