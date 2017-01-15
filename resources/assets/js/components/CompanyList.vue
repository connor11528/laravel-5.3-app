<template>
    <div class='row'>
        <pre>{{ companies | json }}</pre>
    </div>
</template>

<script>
    console.log('here');
    export default {

        data() {
            return {
                companies: []
            }
        },
        methods: {
            fetchCompanyList: function() {
                this.$http.get('api/companies').then(function (response) {
                    console.log(response);
                    this.companies = response.data;
                });
            }
        },

        props: [],

        ready() {
            this.fetchCompanyList();
        }
    }
</script>