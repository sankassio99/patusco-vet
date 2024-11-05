import { createMemoryHistory, createRouter } from 'vue-router'

import ScheduleForm from './pages/ScheduleForm.vue'
import Home from './pages/home/Home.vue'

const routes = [
  { path: '/', component: Home },
  { path: '/ScheduleForm', component: ScheduleForm },
]

export const router = createRouter({
  history: createMemoryHistory(),
  routes,
})