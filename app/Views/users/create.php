<style>
    body{
        background-color:rgb(140, 146, 172);
    }
</style>
<h2>Tambah Pengguna</h2>

<form method="POST" action="?action=store" enctype="multipart/form-data">
    Nama: <input type="text" name="name"><br><br>
    Email: <input type="email" name="email"><br><br>

    Preview:<br>
    <img id="preview" src="#" width="200" length="100" alt="preview" style="display:none; border-radius:5px; border:1px solid #ccc;box-shadow"><br><br>

    Foto: <input type="file" id="photo" name="photo" accept="image/*"><br><br>
    <button onclick="index.php">Cancel</button>
    <button type="submit">Simpan</button>
    
</form>

<script>
    // Ambil elemen file input dan preview
    const photoInput = document.getElementById('photo');
    const preview = document.getElementById('preview');

    // Jalankan saat user pilih file
    photoInput.addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            // Buat URL sementara untuk preview
            const url = URL.createObjectURL(file);
            preview.src = url;
            preview.style.display = 'block';
        } else {
            // Kosongkan preview kalau file dihapus
            preview.src = '#';
            preview.style.display = 'none';
        }
    });
    
</script>
