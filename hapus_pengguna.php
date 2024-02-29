<?php
$id = $_GET['id_user'];
$query = mysqli_query($koneksi, "DELETE FROM user WHERE id_user=$id");
?>
<script>
alert('Hapus data berhasil');
location.href = "index.php?page=data_pengguna";
</script>