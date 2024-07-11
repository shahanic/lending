<script setup>
import {carStore} from "@/stores/car";


import {storeToRefs} from 'pinia';

const car = carStore();
car.getter();
</script>

<template>
    <div>
        <table>
            <thead>
                <th>#</th>
                <th>Brand</th>
                <th>Model</th>
                <th>Year</th> 
                <th>Status</th> 
            </thead>

            <tbody>
                <tr v-for="(carx, i) in car.cars">
                <td>{{ ++i }}</td>
                <td>{{ carx.brand }}</td>
                <td>{{ carx.model }}</td>
                <td>{{ carx.year_bought }}</td>
                <td>{{ carx.status}}</td>
                
                <td>
                    
                    <button @click="car.editCar(carx)">Edit</button>
                    <button @click="car.deleteCar(carx)">Delete</button>
                    <button @click="car.saveCar(carx)">Lend</button>
                    <button @click="car.saveCar(carx)">return</button>
                </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>