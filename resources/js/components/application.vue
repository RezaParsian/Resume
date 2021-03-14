<template>
    <div class="row mx-auto">
            <div class="col align-self-center mx-5">
                <h1 class="text-right">{{title}}</h1>
                <p class="text-right ml-5 mt-2">{{des}}</p>
                <div class="col-md mx-auto">
                    <a :href="link">
                        <div class="col-md d-flex justify-content-center my-1">
                            <button class="btn btn-success rounded-pill col-md-4">بیشتر</button>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col d-flex p-0 position-relative">
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
