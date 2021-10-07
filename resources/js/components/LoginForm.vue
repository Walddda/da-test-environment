<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Login Form</div>

                    <div class="card-body">
                        I am the Login Form
                        <md-button class="md-primary">KYS BUTTON</md-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Vue from 'vue';
    import VueMaterial from 'vue-material';
    Vue.use(VueMaterial);

    export default {
        mounted() {
            console.log('Hi Gab.')
        }
    }
</script>
