<template>
    <div>

        <h1>Student Form</h1>
        <form @submit.prevent="save()">

            <text-field :form="form" field-name="name"></text-field>
            <text-field :form="form" field-name="email"></text-field>
            <text-field :form="form" field-name="phone"></text-field>

            <button type="submit">
                Save
            </button>
        </form>
    </div>
</template>
<style>

</style>
<script>

   // import HeaderComponent from './components/header.vue'

    export default{
        data(){
            return {
                form : {
                    name:'',
                    email:'',
                    phone:'',
                }
            }
        },
        components:{
            //'other-component':OtherComponent,

        },
        methods: {
            studentCreated(student)
            {
                this.$emit('student-created');

                //clear the form
                this.form= {
                        name:'',
                        email:'',
                        phone:'',
                    };
            },
            save()
            {

                let that = this;

                axios.post('/api/students', {
                    name: this.form.name,
                    email: this.form.email,
                    phone: this.form.phone
                }).then(function (response) {
                    console.log(response);
                    that.studentCreated(response.data);
                });
            },
        },
        mounted()
        {
//            this.form.name="Ali";
//            this.form.email="ali@example.com";

        }
    }
</script>
