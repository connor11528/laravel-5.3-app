<template>
    <place-input
            :place.sync="location.place"
            :types.sync="location.types"
            :component-restrictions.sync="location.restrictions"
            class='form-control'
            label='Location: '
            name='location'
    ></place-input>
</template>

<script>
    import { PlaceInput, Map } from 'vue-google-maps'

    export default {
        props: ['location'],
        components: {
            PlaceInput
        }
    }
</script>

<style>
    label { display: block; }
</style>