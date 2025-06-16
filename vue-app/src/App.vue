<script setup>

import {ref} from "vue";

import NavBar from "@/components/nav-bar.vue";
import Home from "@/pages/Home.vue";
import Footer from "@/components/footer.vue";


</script>

<template>
  <NavBar></NavBar>
    <keep-alive  include="Home">
  <router-view></router-view>
    </keep-alive>
  <Footer></Footer>
</template>

<style scoped>
</style>






