<script setup lang="ts">
import { onBeforeMount, ref } from 'vue';
import ScheduleTable, { Schedule } from './ScheduleTable.vue';
import Filter from './Filter.vue';
import ScheduleService from './services/schedulesService';
import FilterModel from './models/filterModel';

const scheduleService = new ScheduleService();

const schedules = ref([]);
const filter : FilterModel = null;

onBeforeMount(() => {
    fetchSchedules(filter);
});

function fetchSchedules(filter: FilterModel) {
    scheduleService.getSchedules(filter).then((data) => {
        schedules.value = data;
    });
}

function onSubmit(filter: FilterModel) {
    fetchSchedules(filter);
}

</script>

<template>
    <div>
        <h1>Filter</h1>
        <Filter @submit="onSubmit"></Filter>
    </div>

    <div>
        <h1>Schedules Table</h1>
        <ScheduleTable :schedules="schedules"></ScheduleTable>
    </div>
</template>

<style scoped>
</style>
