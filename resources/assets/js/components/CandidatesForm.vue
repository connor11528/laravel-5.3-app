<template>
<div>
    <div class='row'>
        <div class="form-group col-xs-6">
            <label>First</label>
            <input type='text' class='form-control' v-model='fname' placeholder='First Name'>
        </div>
        <div class="form-group col-xs-6">
            <label>Last</label>
            <input type='text' class='form-control' v-model='fname' placeholder='Last Name'>
        </div>
    </div>

    <div class='row'>
        <div class='form-group col-xs-6'>
            <label>Email</label>
            <input type='text' class='form-control' v-model='email' placeholder='Email address'>
        </div>

        <div class='form-group col-xs-6'>
            <label>Phone <span class="label label-default">Optional</span></label>
            <input type='text' class='form-control' v-model='phone' placeholder='Phone number'>
        </div>
    </div>

    <div class='form-group'>
        <location-input :location="locationData"></location-input>
    </div>

    <div class='form-group'>
        <label>Linkedin profile <span class="label label-default">Optional</span></label>
        <input type='text' class='form-control' v-model='linkedin' placeholder='Linkedin profile full url'>
    </div>

    <div class='form-group'>
        <label>Portfolio <span class="label label-default">Optional</span></label>
        <input type='text' class='form-control' v-model='portfolio' placeholder='Portfolio'>
    </div>

    <button class='btn btn-default'>Cancel</button>
    
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