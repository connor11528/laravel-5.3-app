<template>
<div>
    {{endpoint}}

    
    <div class='form-group'>
        <label>Name:</label>
        <input type='text' class='form-control' v-model='name'>
    </div>

    <div class='form-group'>
        <location-input :location="locationData"></location-input>
    </div>

    <button class='btn btn-primary'>{{buttontext}}</button>

    <pre>{{ locationData | json }}</pre>

</div>

</template>

<script>

export default {

    data() {
        return {
            locationData: {
                place: {
                    name: ''
                },
                types: [],
                restrictions: {'country': 'usa'}
            }
        }
    },

    props: ['endpoint', 'buttontext'],


    ready() {
    }
}
</script>