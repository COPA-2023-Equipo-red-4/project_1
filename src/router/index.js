import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import LoginView from '../views/LoginView.vue'
import PetsView from '../views/PetsView.vue'
import ProfileView from '../views/ProfileView.vue'
import ProfiledetailView from '../views/ProfiledetailView.vue'

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  {
    path: '/about',
    name: 'about',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/AboutView.vue')
  },
  {
    path: '/login',
    name: 'login',
    component: LoginView
  },
  {
    path: '/pets',
    name: 'pets',
    component: PetsView
  },
  {
    path: '/profile',
    name: 'profile',
    component: ProfileView
  },
  {
    path: '/profiledetail',
    name: 'profiledetail',
    component: ProfiledetailView
  },
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
