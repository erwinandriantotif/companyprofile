<?php include "header.php"; ?>

<?php include "menu.php"; ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Galeri</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="tambah_staff.php" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nomer</th>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Posisi</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include '../koneksi.php';
                        $i = 1;
                        $data = mysqli_query($koneksi, "SELECT * FROM staff ORDER BY id DESC");
                        while ($d = mysqli_fetch_array($data)) { ?>

                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $d['nama']; ?></td>
                                <td><?= $d['nip']; ?></td>
                                <td><?= $d['ttl']; ?></td>
                                <td><?= $d['jenis_kelamin']; ?></td>
                                <td><?= $d['posisi']; ?></td>
                                <td>
                                    <a href="edit_staff.php?id=<?= $d['id']; ?>" class="btn btn-success">Edit</a>
                                    <a href="hapus_staff.php?id=<?= $d['id']; ?>" onclick="confirm('Apakah Anda Yakin Ingin Menghapus Data ini?')" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->

<!-- <script type="text/javascript">
    function ConfirmDelete() {
        if (confirm("Apakah Anda Yakin Ingin Menghapus Data ini?")) {
            location.href = 'hapus_staff.php';
        } else {
            document.write("Baiklah, tetap di sini saja ya :)");
        }
    }
</script> -->
<?php include "footer.php"; ?>