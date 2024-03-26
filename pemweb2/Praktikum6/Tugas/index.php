<?php

    include 'koneksi.php';

    // show data
    $query = "SELECT * FROM laptop";
    $result = $conn->query($query)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Data Spek laptop</h2>
    <table border="1" style="width:100%">
        <tr>
            <th>ID</th>
            <th>Merk Laptop</th>
            <th>Processor laptop</th>
            <th>RAM Laptop (GB)</th>
            <th>ROM Internal Laptop (GB)</th>
            <th>Aksi</th>
        </tr>

        <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['merk'] ?></td>
            <td><?= $row['processor'] ?></td>
            <td><?= $row['ram'] ?></td>
            <td><?= $row['rom'] ?></td>
            <td>
                <a href="edit.php?id=; ?>">Edit</a>
                <a href="delete.php?id=; ?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
   
    </table>

    <br>
    <h2>Tambah Mahasiswa</h2>
    <form action="insert.php" method="POST">
        Merk Laptop: <input type="text" name="merk" required><br>
        Processor Laptop: <input type="text" name="processor" required><br>
        RAM Laptop (GB): <input type="text" name="ram" required><br>
        ROM Internal Laptop (GB): <input type="number" name="rom" required><br>
        <input type="submit" value="Tambah">
    </form>

</body>
</html>