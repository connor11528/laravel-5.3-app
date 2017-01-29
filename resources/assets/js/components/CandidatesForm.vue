<template>
<div>
    <div class='form-group'>
        <label>Name:</label>
        <input type='text' class='form-control' v-model='name' placeholder='Name'>
    </div>

    <div class='form-group'>
        <location-input :location="locationData"></location-input>
    </div>

    <button class='btn btn-primary' v-on:click='submitForm'>{{buttontext}}</button>

    <pre>{{ locationData | json }}</pre>
</div>

</template>

<script>
export default {
    data() {
        return {
            name: '',
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
    methods: {
        submitForm(){
            // {{endpoint}}
            console.log('send data to ', this.endpoint);
        }
    }
}
</script>