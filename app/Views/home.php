<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div ng-controller="dashboardController">
    <h1 class="h3 mb-4 text-gray-800">{{setTitle}}</h1>
    <div class="d-flex justify-content-center">
        <img src="<?= base_url("assets/img/wuri.png") ?>" width="150px" alt="">
    </div>
    <div class="d-flex justify-content-center">
        <h2 class="font-weight-bold">SMA Mandala Trikora Jayapura</h2>
    </div>

    <div class="d-flex justify-content-center">
        <div class="col-8">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= base_url("assets/img/IMG-20230722-WA0015.jpg")?>" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= base_url("assets/img/IMG-20230722-WA0016.jpg")?>" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= base_url("assets/img/IMG-20230722-WA0017.jpg")?>" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= base_url("assets/img/IMG-20230722-WA0018.jpg")?>" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= base_url("assets/img/IMG-20230722-WA0019.jpg")?>" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= base_url("assets/img/IMG-20230722-WA0020.jpg")?>" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>


</div>
<?= $this->endSection() ?>