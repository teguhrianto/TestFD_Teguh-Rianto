<template>
    <div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6" v-for="(feature, index) in features" :key="index">
                <div class="features__item">
                    <div class="features__item__img">
                        <img :src="feature.icon" alt="feature.title">
                    </div>
                    <div class="features__item__caption">
                        <h5>{{ feature.title }}</h5>
                        <h6>
                            {{ feature.description }}
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'PackagesFeatures',
    data () {
        return {
            features:[
                {
                    id: '0',
                    title:'PHP Semua Versi',
                    icon: require('../assets/img/features/packages/php.svg'),
                    description:'Pilih mulai dari versi PHP 5.3 s/d PHP 7. Ubah sesuka Anda!',
                },
                {
                    id: '1',
                    title:'MySQL Versi 5.6',
                    icon: require('../assets/img/features/packages/mysql.svg'),
                    description:'Nikmati MySQL versi terbaru, tercepat dan kaya akan fitur.',
                },
                {
                    id: '2',
                    title:'Panel Hosting cPanel',
                    icon: require('../assets/img/features/packages/cpanel.svg'),
                    description:'Kelola website dengan panel canggih yang familiar di hati Anda.',
                },
                {
                    id: '3',
                    title:'Garansi Uptime 99.9%',
                    icon: require('../assets/img/features/packages/uptime.svg'),
                    description:'Data center yang mendukung kelangsungan website Anda 24/7.',
                },
                {
                    id: '4',
                    title:'Database InnoDB Unlimited',
                    icon: require('../assets/img/features/packages/innodb.svg'),
                    description:'Jumlah ukuran database yang tumbuh sesuai kebutuhan Anda.',
                },
                {
                    id: '5',
                    title:'Wildcard Remote MySQL',
                    icon: require('../assets/img/features/packages/remote.svg'),
                    description:'Mendukung s/d 25 max_user_connections dan 100 max_connections.'
                },
            ]
        };
    }
}
</script>
