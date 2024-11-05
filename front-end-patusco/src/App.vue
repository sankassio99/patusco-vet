<script setup lang="ts">
</script>

<template>
  <nav>
    <RouterLink to="/">Go to Home</RouterLink>
    <RouterLink to="/ScheduleForm">Go to ScheduleForm</RouterLink>
    <RouterLink to="/ScheduleTable">Go to ScheduleTable</RouterLink>
  </nav>

  <main>
    <RouterView />
  </main>
</template>

<style scoped>
</style>
