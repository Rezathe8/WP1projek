<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5ea6999c53.js" crossorigin="anonymous"></script>

    <title>bengkel</title>

    <link rel="stylesheet" href="style.css">
</head>

<body class="bodyi">
    <div class="navbar ">
        <ul class="ul">
            <li class="li">
                <ion-icon name="home-outline"></ion-icon>
                <a href="index.php">Home</a>
            </li>
            <li class="li">
                <ion-icon name="people-circle-outline"></ion-icon>
                <a href="inputan.php">Costumer</a>
            </li>
            <!-- <li class="li">
                <a href="hasil_input.php">hasil inputan</a>
            </li>
            <li class="logout">
                <a href="">logout</a>
            </li> -->
        </ul>

    </div>

    <?php
    $indentitas = $_POST['nama'];
    $nostnk = $_POST['stnk'];
    $nma = $_POST['boking'];
    $request = $_POST['kerusakan'];
    ?>

    <div class="">
        <table border="3"  cellpadding="10" cellspacing="10">
            <tr>
                <th>Nama Costumer</th>
                <td><?php echo $indentitas ?></td>
            </tr>
            <tr>
                <th>Nomor STNK</th>
                <td><?php echo $nostnk ?></td>
            </tr>
            <tr>
                <th>Tanggal</th>
                <td><?php echo $nma ?></td>
            </tr>
            <tr>
                <th>Pemesanan</th>
                <td><?php echo $request ?></td>
            </tr>
            <tr>
                <td align="center" colspon="5"> <button type="submit" onclick="print()">print</button></td>
            </tr>
        </table>
    </div>


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>