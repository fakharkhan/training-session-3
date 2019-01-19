<template>
    <div class="form-group">
        <label :for="'fc-'+fieldName">{{ fieldName.toUpperCase() }}</label>
        <input type="text" class="form-control"
               :id="'fc-'+fieldName"
               :name="fieldName"
               :placeholder="'Enter your '+fieldName"
               v-model="form[fieldName]"
        >
    </div>
</template>

<script>
    export default
    {
        props:{
            form: {},
            fieldName: '',
        }
    }
</script>