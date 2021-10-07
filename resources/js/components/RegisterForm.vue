<template>
    <div>
        <form novalidate class="md-layout">
            <md-card class="md-layout-utem md-size-50 md-small-size-100">
                <md-card-header>
                    <div class="md-title">Register</div>
                </md-card-header>

                <md-card-content>
                    <div class="md-layout md-gutter">
                        <div class="md-layout-item md-small-size-100">
                            <md-field>
                                <label> First Name </label>
                                <md-input />
                            </md-field>
                        </div>

                        <div class="md-layout-item md-small-size-100">
                            <md-field>
                                <label> Last Name </label>
                                <md-input />
                            </md-field>
                        </div>

                        <div class="md-layout-item md-small-size-100">
                            <md-field>
                                <label> Username </label>
                                <md-input />
                            </md-field>
                        </div>

                        <div class="md-layout-item md-small-size-100">
                            <md-field>
                                <label> E-Mail </label>
                                <md-input />
                            </md-field>
                        </div>

                        <div class="md-layout-item md-small-size-100">
                            <md-field>
                                <label> Password </label>
                                <md-input v-model="password" type="password"></md-input>
                            </md-field>
                        </div>

                        <div class="md-layout-item md-small-size-100">
                            <md-field>
                                <label> Password Repeat</label>
                                <md-input v-model="password" type="password"></md-input>
                            </md-field>
                        </div>

                        <div>
                            <md-button class="md-raised md-primary">Register</md-button>
                        </div>

                    </div>
                </md-card-content>
            </md-card>
        </form>
    </div>
</template>

<script>

    export default {
        mounted() {
            
        }
    }
</script>
