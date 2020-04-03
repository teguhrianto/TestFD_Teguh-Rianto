<!-- Use Frontpage Layout -->
@extends('layouts.frontpage')

<!-- Main Content -->
@section('content')
<section class="hero border-bottom">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6">
                <div class="hero__caption">
                    <h1>PHP Hosting</h1>
                    <h2>Cepat, handal, penuh dengan modul PHP yang Anda butuhkan</h2>
                    <h6>
                        <span class="mdi mdi-checkbox-marked-circle text-success"></span> <span>Solusi PHP untuk performa query yang lebih cepat.</span>
                    </h6>
                    <h6>
                        <span class="mdi mdi-checkbox-marked-circle text-success"></span> <span>Konsumsi memori yang lebih rendah.</span>
                    </h6>
                    <h6>
                        <span class="mdi mdi-checkbox-marked-circle text-success"></span> <span>Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7.</span>
                    </h6>
                    <h6>
                        <span class="mdi mdi-checkbox-marked-circle text-success"></span> <span>Fitur Enkripsi IonCube dan Zend Guard Loaders.</span>
                    </h6>
                </div>
            </div>
            <div class="col-lg-6 col-md-10">
                <div class="hero__img">
                    <img src="/assets/img/hero/illustration.svg" alt="PHP Hosting" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="features features--type-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-4">
                <div class="features__item">
                    <div class="features__item__img">
                        <img src="/assets/img/features/zendguard.svg" alt="PHP Zend Guard Loaders">
                    </div>
                    <div class="features__item__caption">
                        <h6>PHP Zend Guard Loaders</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="features__item">
                    <div class="features__item__img">
                        <img src="/assets/img/features/composer.svg" alt="PHP Composer">
                    </div>
                    <div class="features__item__caption">
                        <h6>PHP Composer</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="features__item">
                    <div class="features__item__img">
                        <img src="/assets/img/features/ioncube.svg" alt="PHP IonCube Loader">
                    </div>
                    <div class="features__item__caption">
                        <h6>PHP IonCube Loader</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="packages">
    <div class="container">
        <div class="title">
            <h3>Paket Hosting Singapura yang Tepat</h3>
            <h4>Diskon 40% + Domain dan SSL Gratis untuk Anda</h4>
        </div>
        <packages-hosting></packages-hosting>
    </div>
</section>

<section class="php-limit separator">
    <div class="container">
        <div class="title">
            <h4>Powerfull dengan Limit PHP yang Lebih Besar</h4>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
                <table class="table table-striped">
                    <tr>
                        <td class="text-center">
                            <p>
                                <span class="mdi mdi-checkbox-marked-circle"></span> max execution time 300s
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <p>
                                <span class="mdi mdi-checkbox-marked-circle"></span> max execution time 300s
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <p>
                                <span class="mdi mdi-checkbox-marked-circle"></span> php memory limit 1024 MB
                            </p>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-lg-5 col-md-6">
                <table class="table table-striped">
                    <tr>
                        <td class="text-center">
                            <p>
                                <span class="mdi mdi-checkbox-marked-circle"></span> post max size 128 MB
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <p>
                                <span class="mdi mdi-checkbox-marked-circle"></span> upload max filesize 128 MB
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <p>
                                <span class="mdi mdi-checkbox-marked-circle"></span> max input vars 2500
                            </p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>

<section class="features features--type-2 separator pb-0">
    <div class="container">
        <div class="title">
            <h4>Semua Paket Hosting Sudah Termasuk</h4>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="features__item">
                    <div class="features__item__img">
                        <img src="/assets/img/features/packages/php.svg" alt="PHP Semua Versi">
                    </div>
                    <div class="features__item__caption">
                        <h5>PHP Semua Versi</h5>
                        <h6>
                            Pilih mulai dari versi PHP 5.3 s/d PHP 7.
                            Ubah sesuka Anda!
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="features__item">
                    <div class="features__item__img">
                        <img src="/assets/img/features/packages/mysql.svg" alt="MySQL Versi 5.6">
                    </div>
                    <div class="features__item__caption">
                        <h5>MySQL Versi 5.6</h5>
                        <h6>
                            Nikmati MySQL versi terbaru, tercepat dan
                            kaya akan fitur.
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="features__item">
                    <div class="features__item__img">
                        <img src="/assets/img/features/packages/cpanel.svg" alt="Panel Hosting cPanel">
                    </div>
                    <div class="features__item__caption">
                        <h5>Panel Hosting cPanel</h5>
                        <h6>
                            Kelola website dengan panel canggih yang
                            familiar di hati Anda.
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="features__item">
                    <div class="features__item__img">
                        <img src="/assets/img/features/packages/uptime.svg" alt="Garansi Uptime 99.9%">
                    </div>
                    <div class="features__item__caption">
                        <h5>Garansi Uptime 99.9%</h5>
                        <h6>
                            Data center yang mendukung kelangsungan
                            website Anda 24/7.
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="features__item">
                    <div class="features__item__img">
                        <img src="/assets/img/features/packages/innodb.svg" alt="Database InnoDB Unlimited">
                    </div>
                    <div class="features__item__caption">
                        <h5>Database InnoDB Unlimited</h5>
                        <h6>
                            Jumlah ukuran database yang tumbuh
                            sesuai kebutuhan Anda.
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="features__item">
                    <div class="features__item__img">
                        <img src="/assets/img/features/packages/remote.svg" alt="Wildcard Remote MySQL">
                    </div>
                    <div class="features__item__caption">
                        <h5>Wildcard Remote MySQL</h5>
                        <h6>
                            Mendukung s/d 25 max_user_connections
                            dan 100 max_connections.
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="laravel-support border-bottom pb-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-10">
                <div class="title">
                    <h4>Mendukung Penuh Framework Laravel</h4>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h5>
                    Tak perlu menggunakan dedicated server ataupun VPS
                    yang mahal. Layanan PHP hosting murah kami
                    mendukung penuh framework favorit Anda
                </h5>
                <h6>
                    <span class="mdi mdi-checkbox-marked-circle text-success"></span>
                    <span>Install Laravel <strong>1 klik</strong> dengan Softaculous Installer</span>
                </h6>
                <h6>
                    <span class="mdi mdi-checkbox-marked-circle text-success"></span>
                    <span>Mendukung ekstensi <strong>PHP MCrypt, phar, mbstring, json,</strong> dan <strong>fileinfo.</strong></span>
                </h6>
                <h6>
                    <span class="mdi mdi-checkbox-marked-circle text-success"></span>
                    <span>Tersedia <strong>Composer</strong> dan <strong>SSH</strong> untuk menginstal packages pilihan Anda.</span>
                </h6>
                <p class="pt-2 mb-4">
                    <small>Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis</small>
                </p>
                <div class="row">
                    <div class="col-md-12 text-md-left text-center">
                        <a href="javascript:void(0)" class="btn btn-primary btn-lg mb-3">
                            Pilih Hosting Anda
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-10">
                <img src="/assets/img/laravel-support.svg" alt="Laravel Support" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<section class="php-modules">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-10">
                <div class="title">
                    <h4>Modul Lengkap Untuk Menjalankan Aplikasi PHP Anda</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-6 php-modules__list">
                <p>IcePHP</p>
                <p>apc</p>
                <p>apcu</p>
                <p>apm</p>
                <p>ares</p>
                <p>bcmath</p>
                <p>bcompiler</p>
                <p>big_int</p>
                <p>bitset</p>
                <p>bloomy</p>
                <p>bz2_filter</p>
                <p>clamav</p>
                <p>coin_acceptor</p>
                <p>crack</p>
                <p>dba</p>
            </div>
            <div class="col-md-3 col-6 php-modules__list">
                <p>http</p>
                <p>huffman</p>
                <p>idn</p>
                <p>igbinary</p>
                <p>imagick</p>
                <p>imap</p>
                <p>inclued</p>
                <p>inotify</p>
                <p>interbase</p>
                <p>intl</p>
                <p>ioncube_loader</p>
                <p>ioncube_loader_4</p>
                <p>jsmin</p>
                <p>json</p>
                <p>ldap</p>
            </div>
            <div class="col-md-3 col-6 php-modules__list">
                <p>nd_pdo_mysql</p>
                <p>oauth</p>
                <p>oci8</p>
                <p>odbc</p>
                <p>opcache</p>
                <p>pdf</p>
                <p>pdo</p>
                <p>pdo_dblib</p>
                <p>pdo_firebird</p>
                <p>pdo_mysql</p>
                <p>pdo_odbc</p>
                <p>pdo_pgsql</p>
                <p>pdo_sqlite</p>
                <p>pgsql</p>
                <p>phalcon</p>
            </div>
            <div class="col-md-3 col-6 php-modules__list">
                <p>stats</p>
                <p>stem</p>
                <p>stomp</p>
                <p>suhosin</p>
                <p>sybase_ct</p>
                <p>sysvmsg</p>
                <p>sysvsem</p>
                <p>sysvshm</p>
                <p>tidy</p>
                <p>timezonedb</p>
                <p>trader</p>
                <p>translit</p>
                <p>uploadprogress</p>
                <p>uri_template</p>
                <p>uuid</p>
            </div>
            <div class="col-md-12 text-center mt-5">
                <a href="javascript:void(0)" class="btn btn-outline-dark">
                    Selengkapnya
                </a>
            </div>
        </div>
    </div>
</section>

<section class="linux-hosting pb-0">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-6 px-lg-4 px-3">
                <div class="title text-md-left text-center">
                    <h4>Linux Hosting yang Stabil dengan Teknologi LVE</h4>
                </div>
                <h6 class="font-monserrat mb-5">
                    SuperMicro <strong>Intel Xeon 24-Cores</strong> server dengan RAM <strong>128 GB</strong> dan
                    teknologi <strong>LVE CloudLinux</strong> untuk stabilitas server Anda. Dilengkapi
                    dengan <strong>SSD</strong> untuk kecepatan <strong>MySQL</strong> dan caching, Apache load balancer
                    berbasis LiteSpeed Technologies, <strong>CageFS</strong> security, <strong>Raid-10</strong> protection
                    dan auto backup untuk keamanan website PHP Anda.
                </h6>
                <div class="row">
                    <div class="col-md-12 text-md-left text-center">
                        <a href="javascript:void(0)" class="btn btn-primary btn-lg mb-5">
                            Pilih Hosting Anda
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <img src="/assets/img/support.png" alt="Linux Support" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<section class="share">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <h6 class="share__caption">Bagikan jika Anda menyukai halaman ini.</h6>
            </div>
            <div class="col-lg-5 col-md-6 ml-auto">
                <div class="share__socials">
                    <a class="share__socials__item" href="javascript:void(0)">
                        <div class="share__socials__item__icon">
                            <img src="/assets/img/icons/socials/facebook.png" alt="Facebook Share">
                        </div>
                        <div class="share__socials__item__counter">
                            <h6>80k</h6>
                        </div>
                    </a>
                    <a class="share__socials__item" href="javascript:void(0)">
                        <div class="share__socials__item__icon">
                            <img src="/assets/img/icons/socials/twitter.png" alt="Facebook Share">
                        </div>
                        <div class="share__socials__item__counter">
                            <h6>450</h6>
                        </div>
                    </a>
                    <a class="share__socials__item" href="javascript:void(0)">
                        <div class="share__socials__item__icon">
                            <img src="/assets/img/icons/socials/gplus.png" alt="Facebook Share">
                        </div>
                        <div class="share__socials__item__counter">
                            <h6>1900</h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-9 col-md-8 border-right">
                <h2 class="cta__caption">
                    Perlu <strong class="text-uppercase">Bantuan?</strong> Hubungi Kami : <a href="tel:02745305505"><strong>0274-5305505</strong></a>
                </h2>
            </div>
            <div class="col-lg-auto ml-auto">
                <a href="javascript:void(0)" class="btn btn-outline-light btn-lg btn-icon">
                    <span class="mdi mdi-forum"></span> Live Chat
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
