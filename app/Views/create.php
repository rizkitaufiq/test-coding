<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Tambah User</h2>
    <form action="/user/store" method="POST" style="display: flex; flex-direction:column; gap:1rem;">
        <div>
            <label for="nama">Nama</label>
            <input type="text" name="nama">
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" name="email">
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>

        <div>
            <label for="nomer_hp">Nomer HP</label>
            <input type="number" name="nomer_hp">
        </div>

        <div>
            <button type="submit" style="background-color:blue; color:white;">simpan</button>
        </div>
    </form>
</body>

</html>