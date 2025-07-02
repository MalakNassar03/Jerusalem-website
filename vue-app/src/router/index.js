
import { createRouter, createWebHistory } from 'vue-router';


import Home from '../pages/Home.vue';
import WhoWeAre from '../pages/WhoWeAre.vue';
import Grants from '../pages/grants.vue';
import HistoryPage from '../pages/History.vue'
import BoardofDirectors from '../pages/Board-of-Directors.vue'
import Events from '../pages/Events.vue'





const routes = [
    { path: '/', name: 'Home', component: Home },
    { path: '/who-we-are', name: 'who-we-are', component: WhoWeAre },
    { path: '/grants', name: 'grants', component: Grants },
    { path: '/history', name: 'history', component: HistoryPage },
    { path: '/board-of-directors', name: 'board-of-directors', component: BoardofDirectors },
    { path: '/events', name: 'events', component: Events },






];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;
