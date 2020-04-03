<template>
    <div>
        <div class="alert alert-warning text-center" v-if="errored">
            <p class="mb-0">We're sorry, we're not able to retrieve this information at the moment, please try back later</p>
        </div>
        <div class="row no-gutters justify-content-center" v-else>
            <div class="col-md-12 text-center" v-if="loading">
                <p>Fetching Data...</p>
            </div>
            <div class="col-lg-3 col-md-6" v-else v-for="(item, index) in packages" :key="index">
                <div class="card packages__card" :class="{ 'packages__card--best-seller' : item.bestSeller == true}">
                    <div class="packages__card__ribbon" v-if="item.bestSeller == true">
                        <span>Best Seller!</span>
                    </div>
                    <div class="packages__card__name">
                        <h4>{{ item.name }}</h4>
                    </div>
                    <div class="packages__card__price">
                        <div class="packages__card__price--normal">
                            <h6>{{ item.price.currency }} {{ item.price.normal }}</h6>
                        </div>
                        <div class="packages__card__price--discounted">
                            <h4>
                                <sup>{{ item.price.currency }}</sup>{{ item.price.discounted | truncate(0, 2) }}<sup><strong>{{ item.price.discounted | truncate(2, 6) }}</strong>/ {{ item.price.reccuring }}</sup>
                            </h4>
                        </div>
                    </div>
                    <div class="packages__card__registrants">
                        <p>
                            <strong>{{ item.numOfRegistrants }}</strong> Pengguna Terdaftar
                        </p>
                    </div>
                    <div class="packages__card__values">
                        <p v-for="(value, index) in item.features" :key="index" v-html="value"></p>
                        <div class="packages__card__action">
                            <a href="javascript:void(0);" class="btn" :class="item.bestSeller == true ? 'btn-primary' : 'btn-outline-dark'">
                                {{ item.actionLabel }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'PackageHosting',
    data () {
        return {
            packages: null,
            loading: true,
            errored: false
        }
    },
    filters: {
        truncate (value, from, to) {
            return value.substring(from, to);
        },
    },
    mounted () {
        axios
            .get('../data/packages_hosting.json')
            .then(response => {
                this.packages = response.data
            })
            .catch(error => {
                console.log(error)
                this.errored = true
            })
            .finally(() => this.loading = false)
    }
}
</script>
