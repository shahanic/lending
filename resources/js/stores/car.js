import axios from "axios";
import {defineStore} from "pinia";
export const carStore = defineStore ('car', {
    state:() => {
        return{
            form:{
                brand:'',
                model:'',
                year_bought:'',
                status:'',
            },
            cars:[]
        }
    },


    actions:{
        save(){
            let {form} = this;
            axios.post('/save-car', this.form).then(({data})=>{
                this.$reset();
                this.getter();
                console.log(data)
            }).catch(error => {
                console.error(error);
                alert('An error occurred while saving the car.');
            });
        },

        getter(){
            axios.post('/get-cars').then(({data})=>{
                this.cars = data;
            }).catch(error => {
                console.error(error);
                alert('An error occurred while getting the car.');
            });
        },
        editCar(car){
            this.form = {...car}
        },

        deleteCar(car){
           if(confirm('Are you sure? you want to delete this user')){
                axios.post('/delete-car', car).then(({data})=>{
                    this.getter();
                 })
            }
        }

    }

})