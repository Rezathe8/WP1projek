<?php
$name = $_POST['castamer'];
$stnk = $_POST['stnk'];
$tanggal = $_POST['tanggal'];
$kerusakan = $_POST['kerusakan'];




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>


<body>
    <div class="print">
        <!-- <table border="4px" cellspacing="5px">
            <tr>
                <td colspan="2"> ---===== pembayaran =====--- <br>
                    ---==== bengkel keren ====---</td>
            </tr>

            <tr>
                <td>
                    Nama Costumer
                </td>
                <td align="center">
                    <?php echo $name  ?>
                </td>
            </tr>
            <tr>
                <td>
                    No. STNK
                </td>
                <td align="center">
                    <?php echo $stnk  ?>
                </td>
            </tr>
            <tr>
                <td>
                    tanggal
                </td>
                <td align="center">
                    <?php echo $tanggal  ?>
                </td>
            </tr>
            <tr>
                <td>
                    Order
                </td>
                <td align="center">
                    <?php echo $kerusakan  ?>
                </td>
            </tr>


            <button type="submit" onclick="print()"> print</button>
        </table> -->

        <table border="4px" cellspacing="5px">
            <tr>
                <td colspan="5"> ---===== pembayaran =====--- <br>
                    ---==== bengkel keren ====---</td>


            </tr>
            <tr>
                <td align="left" colspan="4">tanggal : <?php echo $tanggal ?></td>
                <td> tn. <?php echo $name ?> </td>
            </tr>

            <tr>
                <td align="left" colspan="5">no.stnk : <?php echo $stnk ?></td>
            </tr>
            <tr>
                <td>No</td>
                <td>Order</td>
                <td>pcs</td>
                <td>Harga</td>
                <td>total</td>
            </tr>

            <tr>
                <td>1.</td>
                <td><?php echo   $kerusakan ?></td>
                <td>1</td>
                <td>50000</td>
                <td>50000</td>
            </tr>

            <tr>
                <td colspan="5"><button type="submit" onclick="print()">
                <ion-icon name="print-outline"></ion-icon>
            </button> print</td>
            </tr>
        </table>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>