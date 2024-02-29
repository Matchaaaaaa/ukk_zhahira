<h1 class="mt-4">Data Pengguna</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="my-2">
                <a href="?page=tambah_data" class="btn btn-info">Tambah Petugas</a>
            </div>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tr>
                    <th>No</th>
                    <th>Nama </th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>No Hp</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
                <?php

                $i = 1;
                $query = mysqli_query($koneksi, "SELECT*FROM user");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                <tr>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['username']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><?php echo $data['no_telepon']; ?></td>
                    <td><?php echo $data['level']; ?></td>

                    <td>
                        <a onclick="return confirm('Apakah anda yakin menghapus data ini?');"
                            href="?page=hapus_pengguna&&id_user=<?php echo $data['id_user']; ?>"
                            class="btn btn-info">Hapus</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>
</div>