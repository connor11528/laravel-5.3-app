<template>
    <google-autocomplete
        class = "input"
        placeholder = "type your address"
    >
    </google-autocomplete>
</template>

<script>
    import Store from 'google-autocomplete-vue/dist/Store';
    import Components from 'google-autocomplete-vue';

    console.log(Store);
    export default {
        ready() {
            console.log('Component ready.')
        },
        data: function(){
            return {
                output: {}, 
                address: {}, 
                sent: false
            };
        },

        computed:{
            sharedAddress: function(){
                return Store.state.sharedAddress;
            }
        },

        watch: {
            sharedAddress: function (){
                this.address = this.sharedAddress;
            }
        },

        methods:{
            submit: function (){
                this.sent = true;
                this.output = this.address;
                this.address = {};
            },
            isValid: function (){
                return Object.keys(this.output).length > 0;
            },
            isNotValid: function (){
                return ! this.isValid();
            }
        }
    }
</script>
