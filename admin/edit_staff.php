<?php
include "koneksi.php";
$ambil = mysqli_query($koneksi, "SELECT * FROM staff WHERE id = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();
?>

<?php include "header.php"; ?>

<?php include "menu.php"; ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit Data Staff</h1>
    <form method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" name="nama" value="<?= $pecah['nama']; ?>" class="form-control" id="exampleInputEmail1">
        </div>
        <div class=" form-group">
            <label for="exampleInputPassword1">NIP</label>
            <input type="text" name="nip" value="<?= $pecah['nip']; ?>" class="form-control" id="exampleInputPassword1">
        </div>
        <div class=" form-group">
            <label for="exampleInputPassword1">Jenis Kelamin</label>
            <input type="text" name="jenis_kelamin" value="<?= $pecah['jenis_kelamin']; ?>" class="form-control" id="exampleInputPassword1" enable>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword3">Tanggal Lahir</label>
            <input type="date" name="ttl" class="form-control" id="exampleInputPassword3" value="<?= $pecah['ttl']; ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword4">Posisi</label>
            <input type="text" name="posisi" class="form-control" id="exampleInputPassword4" value="<?= $pecah['posisi']; ?>">
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
    </form>
    <?php
    //jika ada tombol simpan maka mengupdate
    if (isset($_POST['submit'])) {
        $update = $koneksi->query("UPDATE staff SET nama ='$_POST[nama]', nip='$_POST[nip]', ttl='$_POST[ttl]', jenis_kelamin='$_POST[jenis_kelamin]',posisi='$_POST[posisi]' WHERE id='$_GET[id]'");
        if ($update) {
            echo "<script>
                            alert ('Data Tersimpan !');  
                            // redirect ke halaman staff
                            document.location= 'staff.php';
                            </script>";
        } else {
            echo "<script>
                            alert ('Data Gagal Tersimpan !');  
                            // redirect ke halaman staff
                            document.location= 'staff.php';
                            </script>";
        }
    }
    ?>
</div>
<!-- /.container-fluid -->
</div>
<?php include "footer.php"; ?>