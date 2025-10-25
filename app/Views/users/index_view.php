<?php include __DIR__ . '/../layout.php'; ?>
<style>
    body{
        background-color:rgb(140, 146, 172);
    }
    ul{
        padding:5px;
        
    }
    li{
        background-color:rgb(0, 0, 128);
        list-style-type: none;
        padding:5px;
        margin: 5px;
        
        
    }
    a{
        text-decoration: none;
        color:White;
        display:block;
    }
    #create{
        background-color:rgb(0, 0, 128);
        padding:10px;
        
    }
    table{
        padding:10px;
    }
</style>
<h2>Daftar Pengguna</h2>
<a id="create" href="?action=create">Tambah Pengguna</a>

<table border="1" cellpadding="5">
<tr>
    <th>Foto</th><th>Aksi</th>
</tr>
<?php foreach ($users as $user): ?>
<tr>
<td><img src="public/uploads/<?= $user['photo'] ?>" width="200" ></td>
<td>
    <ul>
        <li><a href="index.php?action=detail&id=<?= $user['id'] ?>">Detail</a></li>
        <li><a href="index.php?action=delete&id=<?= $user['id'] ?>">Hapus</a></li>
    </ul>
</td>


</tr>
<?php endforeach; ?>
</table>