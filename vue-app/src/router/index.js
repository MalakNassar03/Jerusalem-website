
import { createRouter, createWebHistory } from 'vue-router';


import Home from '../pages/Home.vue';
import WhoWeAre from '../pages/WhoWeAre.vue';



const routes = [
    { path: '/', name: 'Home', component: Home },
    { path: '/who-we-are', name: 'who-we-are', component: WhoWeAre },



];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;
