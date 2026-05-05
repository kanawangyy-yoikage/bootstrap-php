<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP MySQL - Pemula</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .container { max-width: 900px; }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Sistem Manajemen Data</h2>

        <div class="card shadow-sm mb-4">
            <div class="card-header bg-primary text-white">Tambah Data Baru</div>
            <div class="card-body">
                <form action="proses.php" method="POST" class="row g-3">
                    <div class="col-md-4">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Nomor HP</label>
                        <input type="text" name="handphone" class="form-control" required>
                    </div>
                    <div class="col-12 text-end">
                        <button type="submit" name="simpan" class="btn btn-success px-4">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="card shadow-sm">
            <div class="card-body p-0">
                <table class="table table-hover mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th class="px-3">No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No. HP</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $query = mysqli_query($koneksi, "SELECT * FROM tabel_data ORDER BY nomor DESC");
                        while($data = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <td class="px-3"><?= $no++; ?></td>
                            <td><?= $data['nama']; ?></td>
                            <td><?= $data['email']; ?></td>
                            <td><?= $data['handphone']; ?></td>
                            <td class="text-center">
                                <a href="proses.php?hapus=<?= $data['nomor']; ?>" 
                                   class="btn btn-danger btn-sm" 
                                   onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')">Hapus</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>