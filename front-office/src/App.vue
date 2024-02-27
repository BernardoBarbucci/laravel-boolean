<template>
  <div>
    <HomePage />
    <CocktailsIndex />
    <FooterApp />
    <router-view></router-view>
  </div>
</template>

<script>
import HomePage from './components/HomePage.vue';
import CocktailsIndex from './components/CocktailsIndex.vue';
import FooterApp from './components/FooterApp.vue';

export default {
  name: 'App',
  components: {
    HomePage,
    CocktailsIndex,
    FooterApp,
  }
}
</script>

<style></style>
