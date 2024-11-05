import { createMemoryHistory, createRouter } from 'vue-router'

import ScheduleForm from './pages/schedule/ScheduleForm.vue'
import Home from './pages/home/Home.vue'
import ScheduleTable from './pages/schedulesTable/ScheduleTable.vue'

const routes = [
  { path: '/', component: Home },
  { path: '/ScheduleForm', component: ScheduleForm },
  { path: '/ScheduleTable', component: ScheduleTable },
]

export const router = createRouter({
  history: createMemoryHistory(),
  routes,
})