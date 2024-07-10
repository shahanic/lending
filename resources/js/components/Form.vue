<script setup>
import {carStore} from "@/stores/car.js";
import {storeToRefs} from 'pinia';

const car= carStore();
const {form} = storeToRefs(car)

</script>
<template>
    
    <div>
        <label for=""> Brand: </label>
        <input type="text" v-model="form.brand">
    </div>
    <div>
        <label for=""> Model: </label>
        <input type="text" v-model="form.model">
    </div>
    <div>
        <label for=""> Year Bought: </label>
        <input type="text" v-model="form.year_bought">
    </div>
    <div>
        <label for="">Status: </label>
        <input type="text" v-model="form.status">
    </div>
    <div>
        <button @click="car.save()"> Save </button>
    </div>
</template>