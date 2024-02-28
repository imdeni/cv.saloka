import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HeaderView.vue'


const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: '/cms',
      name: 'cms',
      component: () => import('../views/DashboardView.vue')
    },
    {
      path: '/tentang',
      name: 'tentang',
      component: () => import('../views/TentangView.vue')
    },
    {
      path: '/wahana',
      name: 'wahana',
      component: () => import('../views/WahanaView.vue')
    },
    {
      path: '/peta',
      name: 'peta',
      component: () => import('../views/PetaView.vue')
    },
    {
      path: '/events',
      name: 'events',
      component: () => import('../views/EventsView.vue')
    },
    {
      path: '/faqs',
      name: 'faqs',
      component: () => import('../views/FaqsView.vue')
    },
    {
      path: '/kontak',
      name: 'kontak',
      component: () => import('../views/KontakView.vue')
    },
  ]
})

export default router
