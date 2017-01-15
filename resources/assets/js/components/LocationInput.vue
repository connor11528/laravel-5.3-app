<template>

    <place-input
            :place.sync="placeInput.place"
            :types.sync="placeInput.types"
            :component-restrictions.sync="placeInput.restrictions"
            class='form-control'
            label='Location: '
            name='location'
    ></place-input>

</template>

<script>
    import { store } from '../store'
    import { PlaceInput, Map } from 'vue-google-maps'

    export default {

        data() {
            return {
                sharedState: store.state,
                privteState: {
                    place: {
                        name: ''
                    },
                    types: [],
                    restrictions: {'country': 'usa'}
                }
            }
        },
        props: ['location'],

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