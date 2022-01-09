<?php
require 'function.php';

$karyawan = query("SELECT * FROM karyawan");
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 9</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Moon+Dance&family=Roboto+Slab&display=swap');

    h2 {
        font-family: 'Roboto Slab', serif;
    }
</style>

<body>
    <div class="d-flex flex-column justify-content-center w-100 h-100">

        <div class="d-flex flex-column justify-content-center align-items-center">
            <h2 class="fw-light text-white m-0">— Daftar Karyawan PT Maju Terus Pantang Mundur —</h2>

            <div class="btn-group my-5">
                <a href="add.php" class="btn btn-success" style="margin-right: 0%;">Add Data</a>

            </div>
            <br>

            <table border="3" cellpadding="10" cellspacing="0">
                <tr style="background:">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>Position</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>

                <?php foreach ($karyawan as $item) : ?>
                    <tr style="background: #D6D6D6;">
                        <td><?= $item['id']; ?></td>
                        <td><?= $item['name']; ?></td>
                        <td><?= $item['email']; ?></td>
                        <td><?= $item['address']; ?></td>
                        <td><?= $item['gender']; ?></td>
                        <td><?= $item['position']; ?></td>
                        <td><?= $item['status']; ?></td>
                        <td><a href="delete.php?id=<?= $item['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ?')">Delete</a></td>
                    </tr>
                <?php endforeach ?>
            </table>


        </div>
    </div>

</body>

</html>