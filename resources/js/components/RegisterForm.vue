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
                            <md-vuelidated>
                                <label> First Name </label>
                                <md-input v-model.trim="firstName"/>
                                <md-vuelidated-msg constraint="required">
                                    First Name is required 
                                </md-vuelidated-msg>
                            </md-vuelidated>
                        </div>

                        

                        <div class="md-layout-item md-small-size-100">
                            <md-vuelidated>
                                <label> Last Name </label>
                                <md-input v-model.trim="lastName"/>
                                <md-vuelidated-msg constraint="required">
                                    Last Name is required 
                                </md-vuelidated-msg>
                            </md-vuelidated>
                        </div>

                        <div class="md-layout-item md-small-size-100">
                            <md-vuelidated>
                                <label> Username </label>
                                <md-input v-model.trim="username"/>
                               <md-vuelidated-msg constraint="required">
                                    Username is required
                                </md-vuelidated-msg>
                                <md-vuelidated-msg constraint="maxLength">
                                    Username must be no longer than 20 characters
                                </md-vuelidated-msg>
                                <md-vuelidated-msg constraint="containsSpecialCharacter">
                                    Username must not contain certain characters
                                </md-vuelidated-msg>
                                
                            </md-vuelidated>
                        </div>


                        <div class="md-layout-item md-small-size-100">
                            <md-vuelidated>
                                <label> E-Mail </label>
                                <md-input type="email" v-model.trim="email"/>
                                <md-vuelidated-msg constraint="required">
                                    Email is required
                                </md-vuelidated-msg>
                                <md-vuelidated-msg constraint="email">
                                    Not a valid email address
                                </md-vuelidated-msg>
                            </md-vuelidated>
                        </div>

                        <div class="md-layout-item md-small-size-100">
                            <md-vuelidated>
                                <label> Password </label>
                                <md-input type="password" v-model.trim="password"></md-input>
                                <span class="md-helper-text">Please use a safe one :)</span>
                                <md-vuelidated-msg constraint="required">
                                    Password is required
                                </md-vuelidated-msg>
                                <md-vuelidated-msg constraint="minLength">
                                    Password must be at least 8 characters long
                                </md-vuelidated-msg>
                                <md-vuelidated-msg constraint="containsUppercase">
                                    Password must contain at least 1 uppercase letter
                                </md-vuelidated-msg>
                                <md-vuelidated-msg constraint="containsLowercase">
                                    Password must contain at least 1 lowercase letter
                                </md-vuelidated-msg>
                                <md-vuelidated-msg constraint="containsNumber">
                                    Password must contain at least 1 number
                                </md-vuelidated-msg>
                            </md-vuelidated>
                        </div>

                        <div class="md-layout-item md-small-size-100">
                            <md-vuelidated>
                                <label> Password Repeat</label>
                                <md-input type="password" v-model.trim="repeatPassword"></md-input>
                                <md-vuelidated-msg constraint="required">
                                    You must confirm your password
                                </md-vuelidated-msg>
                                <md-vuelidated-msg constraint="sameAs">
                                    Your Passwords must match
                                </md-vuelidated-msg>
                            </md-vuelidated>
                        </div>

                        <div>
                            <md-button class="md-raised md-primary">You already have an account? Log In</md-button>
                        </div>
                    </div>
                </md-card-content>

                <md-card-actions>
                    <md-button class="md-raised md-primary" @click="submitForm">Create user</md-button>
                </md-card-actions>
            </md-card>
        </form>
    </div>
</template>

<script>

    import { required, minLength, maxLength, between, email, sameAs } from 'vuelidate/lib/validators'
    


    export default {
        mounted() {
            
        },

        data() {
            return {
                firstName: '',
                lastName: '',
                email: '',
                username: '',
                password: '',
                repeatPassword: '',
            }
        },
        
        validations() {
            return {
                firstName: {
                    required
                },
                 
                lastName: {
                    required
                },

                username: {
                    required,
                    maxLength: maxLength(20),          
                    containsSpecialCharacter: function(value) {
                        return !/[!@#$%^&*()+\-=\[\]{};':"\\|,<>\/?]+/.test(value)
                    }
                },

                email: {
                    required,
                    email
                },

                password: {
                    required,
                    minLength: minLength(8),
                    containsUppercase: function(value) {
                        return /[A-Z]/.test(value)
                    },
                    containsLowercase: function(value) {
                        return /[a-z]/.test(value)
                    },
                    containsNumber: function(value) {
                        return /[0-9]/.test(value)
                    },
                },

                repeatPassword: {
                    required,
                    sameAs: sameAs('password')
                }
            }
        },

        methods: {
            submitForm() {
                
            }
        }
    }
</script>
