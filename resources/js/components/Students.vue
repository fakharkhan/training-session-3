<template>
    <div>

        <h1>Students list</h1>
        <table class="table table-borderd">
            <tr>
                <td>Name</td>
                <td>Email</td>
                <td>Phone</td>
            </tr>
            <tr v-for="student in students">
                <td>{{ student.name }}</td>
                <td>{{ student.email }}</td>
                <td>{{ student.phone }}</td>
            </tr>
        </table>

        <student-form v-on:student-created="getStudents"></student-form>
    </div>
</template>

<script>
    export default{
        data(){
            return{
                students:[]
            }
        },
        methods:{
            getStudents()
            {
                let that = this;
                axios.get('/api/students')
                        .then(function(response) {
                           // console.log(response)
                            that.students=response.data;
                        })
                        .catch(function(error) {
                            console.log('Error occurred',error)
                        });
            }
        },
        mounted() {
            this.getStudents();
        }
    }
</script>
