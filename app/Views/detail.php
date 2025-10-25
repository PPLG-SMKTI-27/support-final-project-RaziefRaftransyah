<!DOCTYPE html>
<html>
<head>
    <title>Detail Pengguna</title>
</head>
<body>
    <h2>Detail Pengguna</h2>

    <img src="public/uploads/<?= htmlspecialchars($user['photo']); ?>" 
         width="120" ><br><br>
<div>
    <b>Nama:</b><?= htmlspecialchars($user['name'])?><br>
    <b>Email:</b> <?= ($user['email']); ?><br>
    <b>Dibuat pada:</b> <?= ($user['created_at']); ?><br><br>
</div>
    <a href="index.php">← Kembali ke daftar pengguna</a> |
    <a href="index.php?action=edit&id=<?= $user['id']; ?>">Edit</a>
</body>
</html>
