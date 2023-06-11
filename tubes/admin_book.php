<?php
include 'config.php';

$query = "SELECT * FROM book_form";
$result = mysqli_query($conn, $query);


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Destination Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <?php include 'admin_header.php'; ?>

    <div class="container mt-5">
        <h2>Book Table</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama </th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Location</th>
                    <th>Guest</th>
                    <th>Arrivals</th>
                    <th>Leaving</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result as $row): 
                    $i = 1;
                    ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['location']; ?></td>
                        <td><?php echo $row['guests']; ?></td>
                        <td><?php echo $row['arrivals']; ?></td>
                        <td><?php echo $row['leaving']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
