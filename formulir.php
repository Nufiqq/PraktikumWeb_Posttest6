<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="styleAdmin.css">
</head>
<body>
    <h1 class="judul">STARBUCKS</h1>
    <div class="form-class">
        <h3>Add Menu</h3><br><br>
        <form action="add.php" method="post">
            <label for="">Nama Menu</label><br>
            <input type="text" name="nama" class="form-text"><br>

            <label for="">Tall</label><br>
            <input type="text" name="tall" class="form-text"><br>

            <label for="">Grande</label><br>
            <input type="text" name="grande" class="form-text"><br>

            <label for="">Venti</label><br>
            <input type="text" name="venti" class="form-text"><br>

            <label for="nama_gambar">Nama File</label><br>
            <input type="text" name="nama_gambar" class="form-text">
            
            <label for="">Gambar</label><br>
            <input type="file" name="gambar"><br><br>

            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        </form>
    </div>
</body>
</html>