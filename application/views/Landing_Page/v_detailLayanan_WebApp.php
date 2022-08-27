<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php $this->load->view('Landing_Page/template/head') ?>
    <title>Eninva - Detail Layanan</title>
</head>

<body>
    <!-- Navbar Start -->
    <?php $this->load->view('Landing_Page/template/navbar') ?>
    <!-- Navbar End -->

    <!-- uni banner area start -->
    <div class="uni-banner">
        <div class="container">
            <div class="uni-banner-text">
                <h1>Web Apps Development</h1>
                <h4 style="color: white;">Pengembangan Aplikasi Web</h4>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li>Service Details</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- uni banner area end -->

    <!-- service details area start -->
    <div class="service-details ptb-100 left-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="service-details-sidebar pt-30 pr-20">
                        <div class="service-list">
                            <ul>
                                <li><a class="sd-active" href="#"><span>IT Consultancy</span> <i class="fas fa-angle-right"></i></a></li>
                                <li><a href="#"><span>Development</span> <i class="fas fa-angle-right"></i></a></li>
                                <li><a href="#"><span>Cyber Security</span> <i class="fas fa-angle-right"></i></a></li>
                                <li><a href="#"><span>Co-Structure</span> <i class="fas fa-angle-right"></i></a></li>
                                <li><a href="#"><span>Cloud Service</span> <i class="fas fa-angle-right"></i></a></li>
                                <li><a href="#"><span>Software Design</span> <i class="fas fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                        <div class="sd-contact-box">
                            <i class="fas fa-phone-alt main-icon"></i>
                            <h4>Butuh bantuan kami?</h4>
                            <p>Jika Anda membutuhkan bantuan, jangan ragu untuk menghubungi kami.</p>
                            <p><a href="tel:+00854759804098"><i class="fas fa-phone-alt"></i> (+08) 12 1624 9196</a></p>
                            <p><a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#ee868b828281ae888b96838fc08d8183"><i class="fas fa-envelope-open"></i> <span class="__cf_email__" data-cfemail="442c2128282b0422213c29256a272b29">[email&#160;protected]</span> </a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="service-details-text-area">
                        <img src="<?php echo base_url() ?>assets/assets/images/service/sd1.jpg" alt="image">
                        <h4>Web atau Website</h4>
                        <span align="justify">
                            <p>Web atau biasa disebut Website, merupapan sebuah media yang sangat populer dan menjadi
                                media yang wajib dimiliki oleh perusahaan, baik dalam skala besar hingga kecil sekalipun,
                                Di era digital saat ini, website menjadi penting dimiliki oleh para pelaku bisnis.
                                Tujuannya agar bisnis yang Anda kelola dapat terus berkembang, dan membantu dalam proses
                                transaksi pembelian, serta branding. Hingga mendorong terciptanya brand awareness untuk
                                brand ataupun produk yang Anda jual.
                            </p>
                            <span>

                                <p>Manfaat Website Bagi Bisnis Dan Kelangsungan Usaha : <br>
                                    1. Meningkatkan Kredibilitas Usaha <br>
                                    2. Menghemat Biaya Produksi <br>
                                    3. Selalu Terhubung Dengan Pelanggan atau Konsumen <br>
                                    4. Mudah Diakses <br>
                                    5. Menjangkau Target Pasar Yang Lebih Luas <br>
                                    6. Sarana Katalog Produk dan Jasa (Portofolio) <br>
                                    7. Meningkatkan Pelayanan Pada Pelanggan.
                                </p>

                                <br>
                                <h3>Web Apps Development</h3>
                                <p>Web Apps Development atau Pengembangan Aplikais Web merupakan salah satu dari berbagai layanan
                                    yang Eninva sediakan, kami akan membatu perusahaan anda dalam membangun webiste yang sesuai dengan
                                    kebutuhan usaha anda, untuk dapat memaksimalkan pemberian informasi dan memperluas jangkauan usaha.
                                    kami akan memberikan pelayanan dan hasil terbaik yang bisa kami lakukan. Untuk dapat memberikan
                                    kepuasan pada pelanggan kami, terdapat beberapa layanan yang akan kami berikan
                                    apabila anda meberikan kepercayaan kepada kami, antara lain sebagai berikut :
                                </p>
                                <img src="<?php echo base_url() ?>assets/assets/images/service/sd2.jpg" alt="image">
                                <h4>Layanan Pengembangan Web</h4>
                                <ul>
                                    <li><i class="fas fa-check-square"></i> <span>IT Konsultan</span></li>
                                    <li><i class="fas fa-check-square"></i> <span>Web Development</span></li>
                                    <li><i class="fas fa-check-square"></i> <span>Maintenance</span></li>
                                    <li><i class="fas fa-check-square"></i> <span>Cyber Security</span></li>
                                    <li><i class="fas fa-check-square"></i> <span>Cloud Service</span></li>
                                </ul>
                                <p>Kami akan memberikan pelayanan sesuai dengan kebutuhan anda. Segera percayakan kebutahan Teknologi
                                   anda pada Eninva untuk usaha yang siap bersaing pada perkembangan teknologi yang ada. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service details area end -->

    <!-- footer area start -->
    <?php $this->load->view('Landing_Page/template/footer') ?>
    <!-- footer area end -->

    <div class="go-top"><i class="fas fa-angle-double-up"></i></div>

    <!-- Link of JS files -->
    <?php $this->load->view('Landing_Page/template/js') ?>

</body>

</html>