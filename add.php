<?php
require 'function.php';

if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        echo "
        <script>
            alert('id karyawan berhasil ditambahkan');
            document.location.href = 'index.php';
        </script>
    ";
        //  form ini required
    }
}
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
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@700&display=swap');

    h1 {
        text-shadow: 2px 2px 5px green;
        font-family: 'Open Sans Condensed', sans-serif;
    }
</style>

<!-- Reaponsive Background -->

<body>
    <div class="flex">
        <h1>Tambah Data Karyawan</h1>

        <form action="" method="post">
            <br>
            <label for="name" style="margin-right: 50%;">Name</label><br>
            <input type="text" name="name" id="name" placeholder="Masukkan name" required style="margin-top: 5px; padding-right: 50px;">
            <br><br>

            <label for="email" style="margin-right: 50%;">Email</label><br>
            <input type="text" name="email" id="email" placeholder="Masukkan email" required style="margin-top: 5px; padding-right: 50px;">
            <br><br>

            <label for="address" style="margin-right: 47%;">Address</label><br>
            <input type="text" name="address" id="address" placeholder="Masukkan address" required style="margin-top: 5px; padding-right: 50px;">
            <br><br>

            <label for="gender" style="margin-right: 49%;">Gender</label><br>
            <select name="gender" id="gender" style="padding-right: 152px;">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <br><br>

            <label for="position" style="margin-right: 47%;">Position</label><br>
            <input type="text" name="position" id="position" placeholder="Masukkan position" required style="margin-top: 5px; padding-right: 50px;">
            <br><br>

            <label for="status" style="margin-right: 50%;">Status</label><br>
            <select name="status" id="status" style="padding-right: 148px;">
                <option value="Fulltime">Fulltime</option>
                <option value="Parttime">Parttime</option>
            </select>
            <br><br>

            <input type="submit" name="submit" value="Submit" class="btn btn-success" style="margin-right: 20%;">
            <a href="index.php" class="btn btn-danger">Back</a>
        </form>

    </div>
</body>

</html>