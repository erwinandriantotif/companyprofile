<?php include "header.php"; ?>

<?php include "menu.php"; ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tambah Data Staff</h1>
    <form method="POST" action="aksi.php">
        <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" name="nama" class="form-control" id="exampleInputEmail1">
        </div>
        <div class=" form-group">
            <label for="exampleInputPassword1">NIP</label>
            <input type="text" name="nip" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="laki-laki">
                <label class="form-check-label" for="laki-laki">Laki-laki</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="perempuan">
                <label class="form-check-label" for="perempuan">Perempuan</label>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword3">Tanggal Lahir</label>
            <input type="date" name="ttl" class="form-control" id="exampleInputPassword3">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword4">Posisi</label>
            <input type="text" name="posisi" class="form-control" id="exampleInputPassword4">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; My Company 2021</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Anda Yakin Akan Keluar?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.php">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

</body>

</html>