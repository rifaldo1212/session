<?php
$id = $_GET['id'];
$db = new PDO("mysql:host=localhost;dbname=rumah", 'root', '');
$query = $db->query("SELECT* FROM tbuser WHERE id=$id");
$data = $query->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Update Pasien</title>
</head>
<body>
    <div class="container-sm">
    <form action="proses_edit.php" method="post">
        <input type="hidden" name="id" value="<?= $data['id']?>">
        <div>
            <label for="">Username</label>
            <input type="text" name="username" class="form-control" value="<?= $data['username']?>">
        </div>
        <div>
            <label for="">Password</label>
            <input type="password" name="password" class="form-control" value="<?= $data['password']?>">
        </div>
        <label for="">Role</label>
        <div class="form-floating" >
            <select name="role" id="" class="form-select">
                <option value="admin"<?= $data['role'] == '1' ? 'selected' : '' ?>>Admin</option>
                <option value="user"<?= $data['role'] == '2' ? 'selected' : '' ?>>User</option>
            </select>
        </div>
        <br>
        <button type="submit" class="btn btn-outline-primary">Simpan</button>
    </form>
    </div>
</body>
</html>