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
import { store } from '../store'

export default {

    data() {
        return {
            sharedState: store.state
        }
    },

    props: ['endpoint', 'buttontext'],


    ready() {
    }
}
</script>