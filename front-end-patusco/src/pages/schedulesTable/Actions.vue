<script setup lang="ts">
import { Button } from '@components/ui/button'
import { DropdownMenu, DropdownMenuContent, DropdownMenuItem, DropdownMenuLabel, DropdownMenuSeparator, DropdownMenuTrigger } 
from '@components/ui/dropdown-menu'
import { MoreHorizontal } from 'lucide-vue-next'
import AssignDoctorModal from './AssignDoctorModal.vue';
import { Schedule } from './models/scheduleModel';
import ConfirmModal from '@components/ConfirmModal.vue';
import ManagementStore, { UserType } from '@src/stores/scheduleList';
import EditScheduleModal from './EditScheduleModal.vue';

const props = defineProps<{
    schedule: Schedule;
}>();

function deleteItem() {
    const schedules = ManagementStore.schedules;
    const scheduleIndex = schedules.findIndex((schedule: Schedule) => schedule.id === props.schedule.id);
    schedules.splice(scheduleIndex, 1);
}

const currentUserType = ManagementStore.currentUserType;

</script>

<template>
    <DropdownMenu>
        <DropdownMenuTrigger as-child>

            <Button variant="ghost" class="w-8 h-8 p-0">
                <span class="sr-only">Open menu</span>
                <MoreHorizontal class="w-4 h-4" />
            </Button>

        </DropdownMenuTrigger>

        <DropdownMenuContent align="end" class="flex flex-col items-start">
            <DropdownMenuLabel>Actions</DropdownMenuLabel>

            <EditScheduleModal :schedule="props.schedule" />

            <ConfirmModal v-if="currentUserType == UserType.EMPLOYEE" @confirm="deleteItem" />

            <DropdownMenuSeparator />

            <AssignDoctorModal v-if="currentUserType == UserType.EMPLOYEE" :schedule="schedule" />

        </DropdownMenuContent>
    </DropdownMenu>
</template>