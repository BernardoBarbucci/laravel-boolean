// da rivedere completamente

import { createRouter, createWebHistory } from "vue-router";
import HomePageVue from "./pages/HomePage.vue";
import ProjectListVue from "./pages/ProjectList.vue";
import CategoriesListVue from "./pages/CategoriesList.vue";


const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            name: 'home',
            component: HomePageVue
        },
        {
            path: '/project',
            name: 'project',
            component: ProjectListVue
        },
        {
            path: '/categories',
            name: 'categories',
            component: CategoriesListVue
        }
    ]
});


export { router }
