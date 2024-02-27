// da rivedere completamente

import { createRouter, createWebHistory } from "vue-router";
import HomePage from "./components/HomePage.vue";
import CocktailsIndex from './components/CocktailsIndex.vue';


const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            name: 'home',
            component: HomePage
        },
        {
            path: '/cocktails',
            name: 'cocktails',
            component: CocktailsIndex
        }
    ]
});


export { router }
