<template>
<div>
    {{endpoint}}

    
    <div class='form-group'>
        <label>Name:</label>
        <input type='text' class='form-control' v-model='name'>
    </div>

    <div class='form-group'>
        <location-input></location-input>
    </div>

    <button class='btn btn-primary'>{{buttontext}}</button>
</div>

</template>

<script>

    export default {

        data() {
            return {}
        },

        props: ['endpoint', 'buttontext'],


        ready() {
        }
    }
</script>