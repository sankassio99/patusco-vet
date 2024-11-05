<script setup lang="ts">
import { onBeforeMount, provide, ref } from 'vue';
import ScheduleTable from './ScheduleTable.vue';
import Filter from './Filter.vue';
import ScheduleService from './services/schedulesService';
import FilterModel from './models/filterModel';
import SchedulesStore from '@src/stores/scheduleList';

const scheduleService = new ScheduleService();

const schedules = ref([]);
const filter : FilterModel = null;

onBeforeMount(() => {
    fetchSchedules(filter);
});

function fetchSchedules(filter: FilterModel) {
    scheduleService.getSchedules(filter).then((data) => {
        schedules.value = data;
        SchedulesStore.schedules = data;
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
