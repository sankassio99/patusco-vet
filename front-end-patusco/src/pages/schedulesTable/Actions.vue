<script setup lang="ts">
import { Button } from '@components/ui/button'
import { DropdownMenu, DropdownMenuContent, DropdownMenuItem, DropdownMenuLabel, DropdownMenuSeparator, DropdownMenuTrigger } 
from '@components/ui/dropdown-menu'
import { MoreHorizontal } from 'lucide-vue-next'
import AssignDoctorModal from './AssignDoctorModal.vue';
import { Schedule } from './models/scheduleModel';
import ConfirmModal from '@components/ConfirmModal.vue';
import ManagementStore from '@src/stores/scheduleList';

const props = defineProps<{
    schedule: Schedule;
}>();

function deleteItem() {
    const schedules = ManagementStore.schedules;
    const scheduleIndex = schedules.findIndex((schedule: Schedule) => schedule.id === props.schedule.id);
    schedules.splice(scheduleIndex, 1);
}

</script>

<template>
    <DropdownMenu>
        <DropdownMenuTrigger as-child>

            <Button variant="ghost" class="w-8 h-8 p-0">
                <span class="sr-only">Open menu</span>
                <MoreHorizontal class="w-4 h-4" />
            </Button>

        </DropdownMenuTrigger>

        <DropdownMenuContent align="end">
            <DropdownMenuLabel>Actions</DropdownMenuLabel>

            <DropdownMenuItem>
                Edit
            </DropdownMenuItem>

            <ConfirmModal @confirm="deleteItem" />

            <DropdownMenuSeparator />

            <AssignDoctorModal :schedule="schedule" />

        </DropdownMenuContent>
    </DropdownMenu>
</template>