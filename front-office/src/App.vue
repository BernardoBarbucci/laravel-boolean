<script>
import HomePage from './components/homepage.vue';
import CocktailsIndex from './components/CocktailsIndex.vue';
import FooterApp from './components/FooterApp.vue';

export default {
  components: {
    HomePage,
    CocktailsIndex,
    Footer,
  }
}
</script>



<template>
  <HomePage />
  <CocktailsIndex />
  <FooterApp />
  <router-view></router-view>
</template>

<style></style>
