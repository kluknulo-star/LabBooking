import { createRouter,createWebHistory} from 'vue-router'

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            component: () => import('./components/Zapisi/MainComponent.vue'),
            name: 'zapisi.index'
        },
        {
            path: '/records',
            component: () => import('./components/Zapisi/Records.vue'),
            name: 'records.index'
        },
    ]
})

export default router