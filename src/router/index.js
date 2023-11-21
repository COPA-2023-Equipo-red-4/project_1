import { createRouter, createWebHistory } from 'vue-router'
import LandingView from '../views/LandingView.vue'
import HomeView from '../views/HomeView.vue'
import LoginView from '../views/LoginView.vue'
import PetsView from '../views/PetsView.vue'
import ProfileView from '../views/ProfileView.vue'
import ProfiledetailView from '../views/ProfiledetailView.vue'
import RegisterView from '../views/RegisterView.vue'
import MascotaDetailView from '../views/MascotaDetailView.vue'
import PetRegisterView from '../views/PetRegisterView.vue'
import AboutUsView from '../views/AboutUsView.vue'

const routes = [

  {
    path: '/',
    name: 'landing',
    component: LandingView
  },
  {
    path: '/home',
    name: 'home',
    component: HomeView
  },
  {
    path: '/about',
    name: 'about',
    component: AboutUsView
  },
  {
    path: '/login',
    name: 'login',
    component: LoginView
  },
  {
    path: '/register',
    name: 'register',
    component: RegisterView
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
  {
    path: '/MascotaProfile',
    name: 'MascotaProfile',
    component: MascotaDetailView
  },
  {
    path: '/PetRegister',
    name: 'PetRegister',
    component: PetRegisterView
  },
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
