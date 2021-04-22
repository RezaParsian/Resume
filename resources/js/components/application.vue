<template>
    <div class="row mx-auto my-5">
            <div class="col-md align-self-center mx-md-5 order-1 order-lg-0">
                <h1 class="text-right">{{title}}</h1>
                <p class="ml-md-5 mt-2 text-justify">{{des}}</p>
                <div class="col-md mx-auto">
                    <a :href="link">
                        <div class="col-md d-flex justify-content-center my-1">
                            <button class="btn btn-success rounded-pill col-md-4">بیشتر</button>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg d-flex p-0 position-relative float-left order-0 order-lg-1">
                <img :src="img" :alt="img" class="img-fluid mx-auto">
            </div>
        </div>
</template>

<script>
    export default {
        props:{
            title:{
                default:"موضوع"
            },
            des:{
                default:"توضیحات"
            },
            link:{
                default:"لینک"
            },
            img:{
                default:"عکس"
            },
        },
        mounted() {

        }
    }
</script>
