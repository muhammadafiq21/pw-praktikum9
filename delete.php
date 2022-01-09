<?php
require 'function.php';

$id = $_GET['id'];

if (hapus($id) > 0) {
    echo "
        <script>
            alert('Karyawan dengan Id -$id telah dihapus!');
            document.location.href = 'index.php';
        </script>
    ";
} else {
    echo " ";
}
