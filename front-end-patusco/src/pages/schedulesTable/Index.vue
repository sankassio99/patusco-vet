<script setup lang="ts">
import { onBeforeMount, provide, ref } from 'vue';
import ScheduleTable from './ScheduleTable.vue';
import Filter from './Filter.vue';
import ScheduleService from './services/schedulesService';
import FilterModel from './models/filterModel';
import ManagementStore from '@src/stores/scheduleList';

const scheduleService = new ScheduleService();

const schedules = ref([]);
const filter : FilterModel = null;

onBeforeMount(() => {
    fetchSchedules(filter);
});

function fetchSchedules(filter: FilterModel) {
    scheduleService.getSchedules(filter).then((data) => {
        schedules.value = data;
        ManagementStore.schedules = data;
    });
}

const currentUserType = ManagementStore.currentUserType;

function onApplyFilter(filter: FilterModel) {
    filter.currentUserType = currentUserType;   

    fetchSchedules(filter);
}

</script>

<template>
    <div class="my-10">
        <h1 class="text-4xl font-bold text-center mb-6">Management</h1>
    
        <div>
            <Filter @submit="onApplyFilter"></Filter>
        </div>

        <div>
            <ScheduleTable :schedules="schedules"></ScheduleTable>
        </div>
    </div>
</template>

<style scoped>
</style>
