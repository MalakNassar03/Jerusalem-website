import './assets/css/main.css'
import router from "./router";
import { createPinia } from 'pinia'


import { createApp } from 'vue'
import App from './App.vue'



const app = createApp(App);
app.use(createPinia())

app.use(router);  // Register Vue Router
app.mount("#app");
