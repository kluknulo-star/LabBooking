import './bootstrap';
import { createApp } from 'vue'
import router from './router'
import Root from "./components/Root.vue";

const app = createApp({
    components: {
        Root
    }
});

app.use(router)
app.mount('#app');
