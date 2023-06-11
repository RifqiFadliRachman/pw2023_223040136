<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4b</title>
</head>
<body>
    <?php 

    $hardware = ['Motherboard', 'Processor', 'Hard Disk', 'PC Coller', 'VGA card', 'SSD'];

    ?>
    <h2>Macam-macam perangkat keras komputer</h2>
    <ol>
        <?php foreach ($hardware as $hw) : ?>
            <li>
                <?= $hw; ?>
            </li>
        <?php endforeach ?>
    </ol>
    <h2>Macam-macam perangkat keras komputer baru</h2>
    <?php 

    $hardware[] = 'Card Reader';
    $hardware[] = 'Modem';
    sort($hardware);

    ?>
    <ol>
        <?php foreach ($hardware as $hw) : ?>
            <li>
                <?= $hw; ?>
            </li>
        <?php endforeach ?>
    </ol>
</body>
</html>