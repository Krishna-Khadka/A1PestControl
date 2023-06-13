<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services | A1 Pest Control</title>
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
                <h1 class="heading">Our Services</h1>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li class="active"><a href="#">Services</a></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- banner section ends -->

    <!-- Service-box section starts -->

    <section id="service-box">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="service-head text-center">
                        <h6 class="sub-heading">what we offer</h6>
                        <h1 class="heading">We Promise to Get Rid of Pests. </h1>
                        <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ligula tortor,
                            maximus nec dui quis, scelerisque venenatis ipsum. Aliquam sed semper quam.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-wrapper text-center">
                        <div class="images">
                            <img src="assets/images/service1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">Bed Bug Control</h2>
                            <p class="s-desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error, sed.</p>
                            <a href="#" class="s-button" data-bs-toggle="modal" data-bs-target="#exampleModal">Read More
                                <i class="fa-solid fa-right-long"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-wrapper text-center">
                        <div class="images">
                            <img src="assets/images/service2.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">Bed Bug Control</h2>
                            <p class="s-desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error, sed.</p>
                            <a href="#" class="s-button" data-bs-toggle="modal" data-bs-target="#exampleModal">Read More
                                <i class="fa-solid fa-right-long"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-wrapper text-center">
                        <div class="images">
                            <img src="assets/images/service3.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">Bed Bug Control</h2>
                            <p class="s-desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error, sed.</p>
                            <a href="#" class="s-button" data-bs-toggle="modal" data-bs-target="#exampleModal">Read More
                                <i class="fa-solid fa-right-long"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-wrapper text-center">
                        <div class="images">
                            <img src="assets/images/service4.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">Bed Bug Control</h2>
                            <p class="s-desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error, sed.</p>
                            <a href="#" class="s-button" data-bs-toggle="modal" data-bs-target="#exampleModal">Read More
                                <i class="fa-solid fa-right-long"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-wrapper text-center">
                        <div class="images">
                            <img src="assets/images/service5.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">Bed Bug Control</h2>
                            <p class="s-desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error, sed.</p>
                            <a href="#" class="s-button" data-bs-toggle="modal" data-bs-target="#exampleModal">Read More
                                <i class="fa-solid fa-right-long"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Bed Bug Control</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2 class="fs-5">Description</h2>
                    <p>Senectus auctor sapien lectus in ante volutpat a massa vel elit enim. Dignissim lorem magna quis
                        viverra duis tempor parturient feugiat. Laoreet hendrerit elit cursus platea magnis facilisi
                        viverra cubilia sed congue metus. Praesent blandit mollis lorem id nam rutrum ac risus libero
                        porta.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam velit, a iusto aut quis error
                        earum voluptates placeat ab reiciendis eos natus cumque voluptas quia pariatur in, fuga,
                        eligendi ratione.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Contact">
                </div>
            </div>
        </div>
    </div>


    <!-- Service-box section ends -->



    <?php include "footer.php" ?>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>