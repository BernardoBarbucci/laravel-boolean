<template>
    <section class="container-fluid">
        <div class="d-flex justify-content-center">
            <h1 class="text-warning">
                lista dei drinks
            </h1>
        </div>
    </section>
    <section>
        <div>
            <div v-for="(cocktail, index) in cocktails" :key="index">

                <p>{{ cocktail.name }}</p>

            </div>
        </div>
    </section>
</template>

<script>
import axios from 'axios';

export default {
    name: 'CocktailsIndex',
    data() {
        return {
            cocktails: [],
        }
    },

    methods: {
        getCocktails() {
            axios.get('http://127.0.0.1:8000/api/cocktail')
                .then((response) => {
                    console.log(response);
                    this.cocktails = response.data.result.data;
                })
                .catch(function (error) {
                    console.log(error);
                });
        }
    },

    created() {
        this.getCocktails();
    }
}
</script>

<style></style>
