<script>
import axios from "axios";

export default{
        name: 'ApiContent',
        data(){
            return{
                technologies: [],
            }
        },
        mounted() {

            axios.get("http://localhost:8000/api/v1/technologies")
                .then((res) => {
                    
                    const data = res.data;
                    console.log('data: ', data);

                    this.technologies = res.data.data;
                    console.log('techno:', this.technologies);

                })
                .catch(err => {
                    console.log(err);
                })
    },
    }

</script>

<template>
  <h1>Technologies</h1>
  <ul>
    <li v-for="technology in technologies" :key="technology.id" >
        {{ technology.technology_name }}
    </li>
  </ul>
</template>

<style>

</style>