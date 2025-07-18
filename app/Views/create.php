<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Tambah User</h2>
    <form action="/user/store" method="POST">
        <label for="nama">Nama</label>
        <input type="text" name="nama">

        <label for="email">Email</label>
        <input type="email" name="email">

        <label for="password">Password</label>
        <input type="password" name="password">

        <label for="nomer_hp">Nomer HP</label>
        <input type="number" name="nomer_hp">
    </form>
</body>

</html>