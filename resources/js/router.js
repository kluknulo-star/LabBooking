import { createRouter,createWebHistory} from 'vue-router'

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            component: () => import('./components/Zapisi/MainComponent.vue'),
            name: 'zapisi.index'
        },
    ]
})

export default router