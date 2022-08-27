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
                <h1>Graphic Design</h1>
                <ul>
                    <li><a href="index.html">Home</a></li>
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
                                <li><a class="sd-active" href="service-details.html"><span>IT Consultancy</span> <i
                                            class="fas fa-angle-right"></i></a></li>
                                <li><a href="service-details.html"><span>Development</span> <i
                                            class="fas fa-angle-right"></i></a></li>
                                <li><a href="service-details.html"><span>Cyber Security</span> <i
                                            class="fas fa-angle-right"></i></a></li>
                                <li><a href="service-details.html"><span>Co-Structure</span> <i
                                            class="fas fa-angle-right"></i></a></li>
                                <li><a href="service-details.html"><span>Cloud Service</span> <i
                                            class="fas fa-angle-right"></i></a></li>
                                <li><a href="service-details.html"><span>Software Design</span> <i
                                            class="fas fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                        <div class="sd-contact-box">
                            <i class="fas fa-phone-alt main-icon"></i>
                            <h4>How Can We Help?</h4>
                            <p>If you need any help, please feel free to contact us.</p>
                            <p><a href="tel:+00854759804098"><i class="fas fa-phone-alt"></i> (+008) 5475 9804 098</a>
                            </p>
                            <p><a
                                    href="https://templates.envytheme.com/cdn-cgi/l/email-protection#ee868b828281ae888b96838fc08d8183"><i
                                        class="fas fa-envelope-open"></i> <span class="__cf_email__"
                                        data-cfemail="442c2128282b0422213c29256a272b29">[email&#160;protected]</span>
                                </a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="service-details-text-area">
                        <img src="<?php echo base_url() ?>assets/assets/images/service/sd1.jpg" alt="image">
                        <h3>Branding</h3>
                        <p>Branding adalah praktik pemasaran yang menciptakan nama, simbol, atau desain yang mudah
                            diidentifikasi sebagai milik perusahaan. Branding atau membangun kesadaran merek adalah
                            kegiatan untuk membedakan produk dan layanan kita dengan yang lain dengan kata lain
                            membangun kesadaran merek adalah hal terpenting di perusahaan.</p>

                        <p>Branding merupakan salah satu cara membedakan bisnis Anda dari pesaing dan mengklarifikasi
                            apa yang Anda tawarkan yang membuat bisnis Anda menjadi pilihan yang lebih baik, berbeda,
                            dan memiliki nilai lebih. Branding dibangun untuk menjadi representasi dari bisnis Anda.</p>
                        <h4>Jasa Branding & Design</h4>
                        <p>Tingkatkan branding Perusahaan Anda dengan Designer yang tepat / ahlinya. Kami menyediakan
                            jasa Branding & Design guna meningkatkan produktivitas media komunikasi dan promosi
                            perusahaan Anda dengan harga yang bersaing serta mengutamakan kualitas desain terbaik. </p>
                        <img src="<?php echo base_url() ?>assets/assets/images/service/sd2.jpg" alt="image">
                        <h4>Analyzing It Services</h4>
                        <ul>
                            <li><i class="fas fa-check-square"></i> <span>IT Konsultan</span></li>
                            <li><i class="fas fa-check-square"></i> <span>Menyediakan Tenaga Ahli</span></li>
                            <li><i class="fas fa-check-square"></i> <span>Maintenance</span></li>
                            <li><i class="fas fa-check-square"></i> <span>Cyber Security</span></li>
                            <li><i class="fas fa-check-square"></i> <span>Cloud Service</span></li>
                        </ul>
                        <p>Kami akan memberikan pelayanan sesuai dengan kebutuhan anda. Segera percayakan kebutahan
                            Teknologi
                            anda pada Eninva untuk usaha yang siap bersaing pada perkembangan teknologi yang ada.</p>
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