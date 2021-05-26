<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan1b</title>
</head>
<body>
    <table border="1" cellspacing="1" cellpadding="10">
    <tr>
    <th></th>
    <?php for($i =1; $i <= 5; $i++) : ?>
    <th>kolom <?= $i; ?> </th>
    <?php endfor; ?>
    </tr>

    <?php for($m=1; $m <= 5; $m++) : ?>
    <tr>
    <td>baris <?php echo"$m"?></td>
    <?php for($n=1; $n <= 5; $n++) : ?>
    <td><?php echo "baris$m,kolom$n"?></td>
    <?php endfor; ?>
    </tr>
    <?php endfor; ?>
    </table>
</body>
</html>