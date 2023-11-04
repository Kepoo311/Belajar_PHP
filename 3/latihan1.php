<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .warna-baris {
        background-color: blue;
    }
    </style>
</head>

<body>
    <!-- Membuat table dengan pengulangan for dan merubah warna baris genap-->
    <table border="1" cellpadding="10" cellspacing="0">

        <?php for($i = 1; $i <= 5; $i++): ?>
        <?php if($i % 2 == 0): ?>
        <tr class="warna-baris">
            <?php else: ?>
        <tr>
            <?php endif; ?>
            <?php for($j = 1; $j <= 5; $j++): ?>

            <td> <?php echo "$i,$j";?> </td>

            <?php endfor; ?>
        </tr>

        <?php endfor; ?>

    </table>

    <!-- Membuat table dengan pengulangan while -->
    <!-- <table border=" 1" cellpadding="10" cellspacing="0">

            <?php $i = 1; while($i <= 3) : ?>

        <tr>
            <?php $j = 1; while($j <= 5) : ?>

            <td><?= "$i,$j"; ?></td>

            <?php $j++; endwhile; ?>
        </tr>

        <?php $i++; endwhile; ?>

    </table> -->

    <!-- Membuat table dengan pengulangan do...while -->
    <!-- <table border="1" cellpadding="10" cellspacing="0">

        <?php $i = 1; do{ ?>

        <tr>
            <?php $j = 1; do{ ?>

            <td>
                <?="$i,$j"; ?>
            </td>

            <?php $j++; }while($j <= 5) ?>
        </tr>

        <?php $i++; }while($i <= 3) ?>

    </table> -->

</body>

</html>