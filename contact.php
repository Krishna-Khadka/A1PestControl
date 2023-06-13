<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | A1 Pest Control</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <?php include "navbar.php" ?>

    <!-- banner section starts -->

    <section id="banner" style="background: linear-gradient(#0008,#0009),url(assets/images/banner.jpg);">
        <div class="container">
            <div class="banner-field text-center">
                <h1 class="heading">Contact Us</h1>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li class="active"><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- banner section ends -->

    <!-- contact-info section starts -->

    <section id="contact-info">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-info-left">
                        <div class="contact-info-title">
                            <h6 class="sub-heading">get in touch</h6>
                            <h1 class="heading">let's talk </h1>
                            <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus,
                                luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                        </div>
                        <div class="contact-info-cards">
                            <div class="row g-3">
                                <div class="col-lg-12">
                                    <div class="contact-wrapper d-flex">
                                        <div class="icon">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </div>
                                        <div class="contact-wrapper-content">
                                            <h6 class="sub-heading">location</h6>
                                            <p>Putali Line-9, Dharan</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="contact-wrapper d-flex">
                                        <div class="icon">
                                            <i class="fa-solid fa-envelope"></i>
                                        </div>
                                        <div class="contact-wrapper-content">
                                            <h6 class="sub-heading">email us</h6>
                                            <a href="mailto:info199@gmail.com">info199@gmail.com</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="contact-wrapper d-flex">
                                        <div class="icon">
                                            <i class="fa-solid fa-headphones-simple"></i>
                                        </div>
                                        <div class="contact-wrapper-content">
                                            <h6 class="sub-heading">call us</h6>
                                            <a href="tel:9811064546">+977 9811064546</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3565.9180316792504!2d87.27267597498972!3d26.65110677128492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef6dd263d32fa7%3A0x60a68c89ed3190b4!2sItahari%20Namuna%20College!5e0!3m2!1sen!2snp!4v1685335213962!5m2!1sen!2snp"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact-info section ends -->

    <!-- extra-banner section Starts -->

    <section id="extra" style="background: linear-gradient(#000A,#000B),url(assets/images/slider3.jpg);">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="extra-content">
                        <h1>The pest control expert you can trust.</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                            ullamcorper
                            mattis, pulvinar dapibus leo.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- extra-banner section ends -->

    <!-- contact-form section starts -->

    <section id="contact-form">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="contact-us">
                        <div class="contact-from-head">
                            <h6 class="sub-heading">send us a message</h6>
                            <h1 class="heading">we are here for you </h1>
                            <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus,
                                luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                        </div>
                        <form action="#">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" placeholder="Full Name">
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label">Phone</label>
                                    <input type="number" class="form-control" placeholder="Phone">
                                </div>
                                <div class="col-md-12">
                                    <label for="" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" placeholder="Email Address">
                                </div>
                                <div class="col-md-12">
                                    <label for="" class="form-label">Message</label>
                                    <textarea class="form-control" rows="5"></textarea>
                                </div>
                                <button type="submit">submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact-form section ends -->




    <?php include "footer.php" ?>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>