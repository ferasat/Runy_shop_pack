<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Amin</h1>
                <carousel>
                    <img class="img-fluid" v-for="(img, index) in images" :src="img.src" :key="index">
                </carousel>
            </div>
        </div>
    </div>
</template>

<script>
import carousel from "vue-owl-carousel";
export default {
    components: {
        carousel
    },
    name: "Owl Carousel",
    props: {
        msg: String
    },
    data() {
        return {
            images: []
        }
    },
    created() {
        this.axios
            .get('http://localhost:8000/slider')
            .then(response => {
                this.images = response.data;
            });
    }
};
</script>

<style scoped>

</style>
