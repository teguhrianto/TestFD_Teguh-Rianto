<!-- Use Frontpage Layout -->
@extends('layouts.frontpage')

<!-- Main Content -->
@section('content')
<section class="hero border-bottom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero__caption">
                    <h1>PHP Hosting</h1>
                    <h2>Cepat, handal, penuh dengan modul PHP yang Anda butuhkan</h2>
                    <h6>
                        <i class="fas fa-check-circle text-success"></i> Solusi PHP untuk performa query yang lebih cepat.
                    </h6>
                    <h6>
                        <i class="fas fa-check-circle text-success"></i> Konsumsi memori yang lebih rendah.
                    </h6>
                    <h6>
                        <i class="fas fa-check-circle text-success"></i> Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7.
                    </h6>
                    <h6>
                        <i class="fas fa-check-circle text-success"></i> Fitur Enkripsi IonCube dan Zend Guard Loaders.
                    </h6>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero__img">
                    <img src="{{ asset('assets/img/hero/illustration.svg') }}" alt="PHP Hosting" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="features">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="features__item">
                    <div class="features__item__img">
                        <img src="{{ asset('assets/img/features/zendguard.svg') }}" alt="PHP Zend Guard Loaders">
                    </div>
                    <div class="features__item__caption">
                        <h6>PHP Zend Guard Loaders</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="features__item">
                    <div class="features__item__img">
                        <img src="{{ asset('assets/img/features/composer.svg') }}" alt="PHP Composer">
                    </div>
                    <div class="features__item__caption">
                        <h6>PHP Composer</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="features__item">
                    <div class="features__item__img">
                        <img src="{{ asset('assets/img/features/ioncube.svg') }}" alt="PHP IonCube Loader">
                    </div>
                    <div class="features__item__caption">
                        <h6>PHP IonCube Loader</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<packages-hosting></packages-hosting>
@endsection
