<?php 

include 'koneksi.php';

$query = "SELECT * FROM mahasiswa";
$result = $conn->query($query);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data siswa</title>
</head>
<body>
<table border="1" style="width:100%">
<h2> DATA MAHASISWA STT-NF</h2>

       
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Semester</th>
            <th>Aksi</th>
        </tr>


        <?php while( $row = $result->fetch_assoc()) :?>
        <tr>
            <td><?php echo  $row['id']?></td>
            <td><?php echo  $row['nama']?></td>
            <td><?php echo  $row['nim']?></td>
            <td><?php echo  $row['jurusan']?></td>
            <td><?php echo  $row['semester']?></td>
            <td>
                <a href="edit.php?id=; ?>">Edit</a>
                <a href="delete.php?id=; ?>">Delete</a>
            </td>
        </tr>
        <?php   endwhile;  ?>


    </table>
    <br>
    <form action="insert.php" method="POST">
    <fieldset>
    <h2> Input Data Mahasiswa</h2>

        Nama: <input type="text" name="nama" required><br>
        NIM: <input type="text" name="nim" required><br>
        Jurusan: <input type="text" name="jurusan" required><br>
        Semester: <input type="number" name="semester" required><br>
        <input type="submit" value="Tambah">
        </fieldset>
    </form>

</body>
</html>