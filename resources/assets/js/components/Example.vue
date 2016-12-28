<template>

    <place-input
            :place.sync="placeInput.place"
            :types.sync="placeInput.types"
            :component-restrictions.sync="placeInput.restrictions"
            class='form-control'
    ></place-input>

    <pre>{{ placeInput.place | json }}</pre>

</template>

<script>
    import { PlaceInput, Map } from 'vue-google-maps'

    export default {

        data() {
            return {
                placeInput: {
                    place: {
                        name: ''
                    },
                    types: [],
                    restrictions: {'country': 'usa'}
                }
            }
        },

        components: {
            PlaceInput
        },

        ready() {
        }
    }
</script>
<style>
    label { display: block; }
</style>