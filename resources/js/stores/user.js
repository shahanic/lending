import axios from "axios";
import {defineStore} from "pinia";
export const studentStore = defineStore ('student', {
    state:() => {
        return{
            form:{
                name:'',
                course:'',
            },
            students:[]
        }
    },


    actions:{
        save(){
            let {form} = this;
            axios.post('/save-student', form).then(({data})=>{
                this.$reset();
                this.getter();

            })
        },

        getter(){
            axios.post('/get-students').then(({data})=>{
                this.students = data;
            })
        },
        editStudent(stud){
            this.form = {...stud}
        },

        deleteStudent(stud){
           if(confirm('Are you sure? you want to delete this student')){
                axios.post('/delete-student', stud).then(({data})=>{
                    this.getter();
                 })
            }
        }

    }

})