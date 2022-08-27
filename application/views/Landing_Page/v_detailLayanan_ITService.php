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
                <h1>IT Services</h1>
                <h4 style="color: white;">Layanan Teknologi Informasi</h4>
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
                            <h4>Butuh Bantuan Kami?</h4>
                            <p>Jika Anda membutuhkan bantuan, jangan ragu untuk menghubungi kami.</p>
                            <p><a href="tel:+00854759804098"><i class="fas fa-phone-alt"></i> (+08) 12 1624 9196</a></p>
                            <p><a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#ee868b828281ae888b96838fc08d8183"><i class="fas fa-envelope-open"></i> <span class="__cf_email__" data-cfemail="442c2128282b0422213c29256a272b29">[email&#160;protected]</span> </a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="service-details-text-area">
                        <img src="<?php echo base_url() ?>assets/assets/images/service/sd1.jpg" alt="image">
                        <h4>IT Consultancy</h4>
                        <span align="justify">
                            <p>IT consultant atau Konsultan IT membantu bisnis atau perorangan untuk mengatasi masalah dan
                                meningkatkan kinerja melalui teknologi. Konsultan IT adalah mereka yang memiliki keahlian baik
                                dalam berkomunikasi, memiliki keterampilan organisasi, dan yang terpenting memiliki pemahaman
                                yang baik tentang sistem IT.</p>
                            <p>Anda tidak perlu dipusingkan dengan masalah troubleshooting, kualitas jaringan, koneksi internet,
                                dan lain sebagainya. Keuntungan dari memiliki konsultan teknologi adalah memiliki tenaga kerja
                                yang dapat mengurus berbagai hal yang berbau teknologi, seperti infrastruktur jaringan, data center
                                perusahaan, sistem keamanan IT, dan juga perangkat kolaborasi di dalam bisnis Anda.Dengan begitu,
                                Anda dan karyawan lainnya bisa bekerja dengan lebih produktif lagi. Terlebih lagi, jasa seperti
                                ini umumnya bersifat on demand. Artinya, mereka akan selalu siap sedia jika sewaktu-waktu bisnis
                                Anda membutuhkannya.</p>
                            <br>

                            <h4>IT Services</h4>
                            <p>IT Services merupakan salah satu dari berbagai layanan yang Eninva sediakan, kami akan membatu perusahaan
                                anda dalam menyediakan IT Services atau IT Consultancy yang dapat membantu perusahaan anda dalam melakukan
                                manajemen dan pengendalian teknologi ada perusahaan anda, seperti insfrastruktur jaringan, data center
                                keamanan, dan lain sebagainya guna memaksimalkan setiap proses yang berhubungan dengan IT. kami akan memberikan
                                pelayanan dan hasil terbaik dengan memberikan tenaga ahli pada bidangnya. Untuk dapat memberikan kepuasan pada
                                pelanggan kami, terdapat beberapa layanan yang akan kami berikan apabila anda meberikan kepercayaan kepada kami,
                                antara lain sebagai berikut :</p>
                            <img src="<?php echo base_url() ?>assets/assets/images/service/sd2.jpg" alt="image">
                            <h4>Layanan IT Services</h4>
                            <ul>
                                <li><i class="fas fa-check-square"></i> <span>IT Konsultan</span></li>
                                <li><i class="fas fa-check-square"></i> <span>Menyediakan Tenaga Ahli</span></li>
                                <li><i class="fas fa-check-square"></i> <span>Maintenance</span></li>
                                <li><i class="fas fa-check-square"></i> <span>Cyber Security</span></li>
                                <li><i class="fas fa-check-square"></i> <span>Cloud Service</span></li>
                            </ul>
                            <p>Kami akan memberikan pelayanan sesuai dengan kebutuhan anda. Segera percayakan kebutahan Teknologi
                                anda pada Eninva untuk usaha yang siap bersaing pada perkembangan teknologi yang ada.</p>
                        </span>
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