<script setup lang="ts">
import { ref } from 'vue';
import ScheduleTable, { Schedule } from './ScheduleTable.vue';

const schedules = ref([
    <Schedule>{
        code: '1',
        requesterName: 'John Doe',
        animalName: 'Dog',
        type: 'Vaccination',
        date: '2022-01-01',
        shift: 'Morning',
    },
]);

</script>

<template>
    <div>
        <h1>Schedules Table</h1>
        <ScheduleTable :schedules="schedules"></ScheduleTable>
    </div>
</template>

<style scoped>
</style>
