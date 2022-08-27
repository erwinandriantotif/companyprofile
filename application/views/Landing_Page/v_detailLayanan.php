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
                <h1>Service Details</h1>
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
                                <li><a class="sd-active" href="service-details.html"><span>IT Consultancy</span> <i class="fas fa-angle-right"></i></a></li>
                                <li><a href="service-details.html"><span>Development</span> <i class="fas fa-angle-right"></i></a></li>
                                <li><a href="service-details.html"><span>Cyber Security</span> <i class="fas fa-angle-right"></i></a></li>
                                <li><a href="service-details.html"><span>Co-Structure</span> <i class="fas fa-angle-right"></i></a></li>
                                <li><a href="service-details.html"><span>Cloud Service</span> <i class="fas fa-angle-right"></i></a></li>
                                <li><a href="service-details.html"><span>Software Design</span> <i class="fas fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                        <div class="sd-contact-box">
                            <i class="fas fa-phone-alt main-icon"></i>
                            <h4>How Can We Help?</h4>
                            <p>If you need any help, please feel free to contact us.</p>
                            <p><a href="tel:+00854759804098"><i class="fas fa-phone-alt"></i> (+008) 5475 9804 098</a></p>
                            <p><a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#ee868b828281ae888b96838fc08d8183"><i class="fas fa-envelope-open"></i> <span class="__cf_email__" data-cfemail="442c2128282b0422213c29256a272b29">[email&#160;protected]</span> </a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="service-details-text-area">
                        <img src="<?php echo base_url() ?>assets/assets/images/service/sd1.jpg" alt="image">
                        <h3>IT Consultancy</h3>
                        <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralize by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble thabound to ensue; and equal blame belongs to those who fail in their duty through</p>
                        <p>Weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. </p>
                        <h4>Service Overview</h4>
                        <p>Weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. </p>
                        <img src="<?php echo base_url() ?>assets/assets/images/service/sd2.jpg" alt="image">
                        <h4>Analyzing It Services</h4>
                        <ul>
                            <li><i class="fas fa-check-square"></i> <span>Quisque aliquet nibh sit amet lectus auctor</span></li>
                            <li><i class="fas fa-check-square"></i> <span>Nulla at metus ultricies, placerat augue</span></li>
                            <li><i class="fas fa-check-square"></i> <span>Duis aute irure dolor in reprehenderit in voluptate</span></li>
                        </ul>
                        <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralize by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble thabound to ensue; and equal blame belongs to those who fail in their duty through</p>
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